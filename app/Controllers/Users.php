<?php

namespace App\Controllers;

use App\Models\UserModel;

class Users extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();

        $data['users'] = $userModel->findAll();

        return view('users', $data);
    }

    public function new()
    {
        return view('user_new');
    }

    public function create()
    {
        $rules = [
            'username'  => 'required|is_unique[users.username]',
            'full_name' => 'required'
        ];

        if (! $this->validate($rules)) {
            return redirect()
                ->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $userModel = new UserModel();

        $userModel->insert([
            'username'   => $this->request->getPost('username'),
            'full_name'  => $this->request->getPost('full_name'),
            'created_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()
            ->to('http://localhost:8080/users')
            ->with('success', 'User added successfully.');
    }

    public function edit($id)
    {
        $userModel = new UserModel();

        $user = $userModel->find($id);

        if (! $user) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $data['user'] = $user;

        return view('user_edit', $data);
    }

    public function update($id)
    {
        $userModel = new UserModel();

        $user = $userModel->find($id);

        if (! $user) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $rules = [
            'username'  => "required|is_unique[users.username,id,{$id}]",
            'full_name' => 'required'
        ];

        $avatar = $this->request->getFile('avatar');

        if ($avatar && $avatar->getError() !== UPLOAD_ERR_NO_FILE) {
            $rules['avatar'] = [
                'label' => 'Profile Picture',
                'rules' => [
                    'uploaded[avatar]',
                    'is_image[avatar]',
                    'mime_in[avatar,image/jpg,image/jpeg,image/png]',
                    'max_size[avatar,2048]'
                ]
            ];
        }

        if (! $this->validate($rules)) {
            return redirect()
                ->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $updateData = [
            'username'  => $this->request->getPost('username'),
            'full_name' => $this->request->getPost('full_name')
        ];

        if ($avatar && $avatar->isValid() && ! $avatar->hasMoved()) {

            $newName = $avatar->getRandomName();

            $temporaryPath = WRITEPATH . 'uploads/' . $newName;

            $avatar->move(WRITEPATH . 'uploads', $newName);

            $image = service('image');

            $image->withFile($temporaryPath)
                ->fit(300, 300, 'center')
                ->save(FCPATH . 'uploads/avatars/' . $newName);

            if (is_file($temporaryPath)) {
                unlink($temporaryPath);
            }

            if (! empty($user['avatar'])) {
                $oldAvatar = FCPATH . 'uploads/avatars/' . $user['avatar'];

                if (is_file($oldAvatar)) {
                    unlink($oldAvatar);
                }
            }

            $updateData['avatar'] = $newName;
        }

        $userModel->update($id, $updateData);

        return redirect()
            ->to('http://localhost:8080/users')
            ->with('success', 'User updated successfully.');
    }
}