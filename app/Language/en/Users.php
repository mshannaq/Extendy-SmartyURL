<?php

return [
    'UserNotFound'    => 'User Not found.',
    'SystemUserMenu'  => 'System Users',
    'SystemUsersList' => 'List Users',

    'ListUsersColId'                  => 'ID',
    'ListUsersColUsername'            => 'Username',
    'ListUsersColEmail'               => 'Email',
    'ListUsersColEmailVerifiedStatus' => 'Email Verified',
    'ListUsersColUserGroup'           => 'User Group',
    'ListUsersColUserLastActive'      => 'Last Active',
    'ListUsersColUserUrlCount'        => 'URLs Count',
    'ListUsersColUserActions'         => 'Actions',

    'ListUsersEmailVerifiedStatusActiveYes'  => 'Verified',
    'ListUsersEmailVerifiedStatusActiveNo'   => 'Not Verified',
    'ListUsersEmailVerifiedStatusActivate'   => 'Activate',
    'ListUsersEmailVerifiedStatusDeActivate' => 'Deactivate',

    'ListUsersAccountStatus'                => 'Status',
    'ListUsersEmailStatus'                  => 'ُEmail Verified Status',
    'ListUsersAccountStatusBanned'          => 'Banned',
    'ListUsersAccountStatusNormal'          => 'Normal',
    'ListUsersAccountBanUser'               => 'Ban',
    'ListUsersAccountUnBanUser'             => 'Unban',
    'ListUsersAccountBannedOk'              => 'User account has been banned',
    'ListUsersAccountBanStatus'             => 'Ban reason message',
    'ListUsersAccountBannedErrorYourSelf'   => 'You cannot ban your self',
    'ListUsersAccountBannedErrorSuperadmin' => 'You try to ban superadmin user while you are not superadmin',
    'ListUsersAccountBannedAlready'         => 'User Account is already banned',
    'ListUsersAccountUnBannedOk'            => 'User account has been unbanned',
    'ListUsersAccountUnBannedAlready'       => 'User Account is already unbanned',
    'ListUsersAccountBanUserTitle'          => 'Ban User Account',
    'ListUsersAccountBanUserConfirm'        => 'Are you sure you want to ban {0} user account?',
    'ListUsersAccountUnBanUserTitle'        => 'Un-ban user account',
    'ListUsersAccountUnBanUserConfirm'      => 'Are you sure you want to unban {0} user account?',

    'UsersAddNewUser'                                                     => 'Add New User',
    'UsersAddNewUserPassword'                                             => 'Account Password',
    'UsersAddNewUserKeepPasswordEmptyToNoChange'                          => 'Keep the password empty to not changing it',
    'UsersAddNewUserKeepbanreasonEmptyToShowDefault'                      => 'Keep reason empty if you want to show default ban reason message',
    'UsersAddNewUserAccountStatus'                                        => 'Account Status',
    'UsersAddNewUserUserGroups'                                           => 'User Group',
    'UsersAddNewUserAddBtn'                                               => 'Create new user',
    'UsersAddNewUserUsersEmailVerifiedStatusActiveNoWillSendActivateCode' => 'The verification code for the upcoming login will be sent to email.',
    'UsersAddNewSuperAdminConfirm'                                        => 'Are you sure you want to add this user to the group with system administrator privileges?',
    'UsersAddNewValidatingErrorHappen'                                    => 'An error occurred while verifying the data. Please review the following errors:',
    'UsersAddNewValidatingUsernameExists'                                 => 'Username is already exists for other user',
    'UsersAddNewValidatingEmailExists'                                    => 'Email is already exists for other user',
    'UsersAddNewOK'                                                       => 'User added successfully',

    'UsersEditViewTitle'       => 'Update User Account',
    'UsersEditSaveBtn'         => 'Save Changes',
    'UsersEditNothingTomodify' => 'You have not taken any action that requires modification.',
    'UsersEditOk'              => 'The user account has been successfully updated',

    'UserActivateConfrimTitle'     => 'Activate User Email',
    'UserDeActivateConfrimTitle'   => 'DeActivate User Email',
    'UserActivateConfrimText'      => 'Are you sure you want to mark the user email {0} as activated?',
    'UserDeActivateConfrimText'    => 'Are you sure you want to mark the user email {0} as Deactivated?',
    'UserIsAlreadyActivated'       => 'The user email is already activated',
    'UserActivatedOk'              => 'The user email has been activated',
    'UserIsAlreadyDeActivated'     => 'The user email is already not activated',
    'UserDeActivatedOk'            => 'The user email has been deactivated',
    'UserDeActivatedErrorYourSelf' => 'You cannot deactivate your account email',

    'UserDelUserErrorDel'        => 'Error while deleting user account, try again',
    'UserDelConfirmTitle'        => 'Delete User Account',
    'UserDelConfirm'             => 'Are you sure you want to delete {0} user account and all of his/her URLs?',
    'UserDelUserDeleted'         => 'The user account has been deleted',
    'UserDelUserErrorYourSelf'   => 'You cannot delete your account',
    'UserDelUserErrorSuperadmin' => 'You try to delete superadmin user while you are not superadmin',
];
