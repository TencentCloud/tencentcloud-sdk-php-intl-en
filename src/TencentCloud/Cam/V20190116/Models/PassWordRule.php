<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Sub-account password policy
 *
 * @method integer getMinimumLength() Obtain Minimum length required for the password.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMinimumLength(integer $MinimumLength) Set Minimum length required for the password.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMustContain() Obtain Types of characters the password must contain. 
A: Must contain uppercase letter
a: Must contain lowercase letter
1: Must contain number
!: Must contain special character

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMustContain(string $MustContain) Set Types of characters the password must contain. 
A: Must contain uppercase letter
a: Must contain lowercase letter
1: Must contain number
!: Must contain special character

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getForcePasswordChange() Obtain Password validity period in days, after which the password must be reset. 0 (no expiration)

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setForcePasswordChange(integer $ForcePasswordChange) Set Password validity period in days, after which the password must be reset. 0 (no expiration)

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getReusePasswordLimit() Obtain Number of previous passwords that cannot be reused. 

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReusePasswordLimit(integer $ReusePasswordLimit) Set Number of previous passwords that cannot be reused. 

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRetryPasswordLimit() Obtain Maximum number of failed login attempts allowed within a one hour window.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRetryPasswordLimit(integer $RetryPasswordLimit) Set Maximum number of failed login attempts allowed within a one hour window.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPasswordExpirationInvalidation() Obtain Indicates whether a user can reset their own password after it has expired. 
1: Yes, 2: No (Yes: After password expiration, sub-users are unable to log in and require administrator reset. No: After password expiration, sub-users can log in and are forced to change password based on old password.)

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPasswordExpirationInvalidation(integer $PasswordExpirationInvalidation) Set Indicates whether a user can reset their own password after it has expired. 
1: Yes, 2: No (Yes: After password expiration, sub-users are unable to log in and require administrator reset. No: After password expiration, sub-users can log in and are forced to change password based on old password.)

Note: This field may return null, indicating that no valid values can be obtained.
 */
class PassWordRule extends AbstractModel
{
    /**
     * @var integer Minimum length required for the password.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MinimumLength;

    /**
     * @var string Types of characters the password must contain. 
A: Must contain uppercase letter
a: Must contain lowercase letter
1: Must contain number
!: Must contain special character

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MustContain;

    /**
     * @var integer Password validity period in days, after which the password must be reset. 0 (no expiration)

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ForcePasswordChange;

    /**
     * @var integer Number of previous passwords that cannot be reused. 

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ReusePasswordLimit;

    /**
     * @var integer Maximum number of failed login attempts allowed within a one hour window.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RetryPasswordLimit;

    /**
     * @var integer Indicates whether a user can reset their own password after it has expired. 
1: Yes, 2: No (Yes: After password expiration, sub-users are unable to log in and require administrator reset. No: After password expiration, sub-users can log in and are forced to change password based on old password.)

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PasswordExpirationInvalidation;

    /**
     * @param integer $MinimumLength Minimum length required for the password.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MustContain Types of characters the password must contain. 
A: Must contain uppercase letter
a: Must contain lowercase letter
1: Must contain number
!: Must contain special character

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ForcePasswordChange Password validity period in days, after which the password must be reset. 0 (no expiration)

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ReusePasswordLimit Number of previous passwords that cannot be reused. 

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RetryPasswordLimit Maximum number of failed login attempts allowed within a one hour window.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $PasswordExpirationInvalidation Indicates whether a user can reset their own password after it has expired. 
1: Yes, 2: No (Yes: After password expiration, sub-users are unable to log in and require administrator reset. No: After password expiration, sub-users can log in and are forced to change password based on old password.)

Note: This field may return null, indicating that no valid values can be obtained.
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("MinimumLength",$param) and $param["MinimumLength"] !== null) {
            $this->MinimumLength = $param["MinimumLength"];
        }

        if (array_key_exists("MustContain",$param) and $param["MustContain"] !== null) {
            $this->MustContain = $param["MustContain"];
        }

        if (array_key_exists("ForcePasswordChange",$param) and $param["ForcePasswordChange"] !== null) {
            $this->ForcePasswordChange = $param["ForcePasswordChange"];
        }

        if (array_key_exists("ReusePasswordLimit",$param) and $param["ReusePasswordLimit"] !== null) {
            $this->ReusePasswordLimit = $param["ReusePasswordLimit"];
        }

        if (array_key_exists("RetryPasswordLimit",$param) and $param["RetryPasswordLimit"] !== null) {
            $this->RetryPasswordLimit = $param["RetryPasswordLimit"];
        }

        if (array_key_exists("PasswordExpirationInvalidation",$param) and $param["PasswordExpirationInvalidation"] !== null) {
            $this->PasswordExpirationInvalidation = $param["PasswordExpirationInvalidation"];
        }
    }
}
