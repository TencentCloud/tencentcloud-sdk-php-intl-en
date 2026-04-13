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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAccount request structure.
 *
 * @method string getDBInstanceId() Obtain Instance ID. can be obtained through the DescribeDBInstances api (https://www.tencentcloud.com/document/product/409/16773?lang=en).
 * @method void setDBInstanceId(string $DBInstanceId) Set Instance ID. can be obtained through the DescribeDBInstances api (https://www.tencentcloud.com/document/product/409/16773?lang=en).
 * @method string getUserName() Obtain The name of the account created. Consists of letters (a-z, A-Z), numbers (0-9), underscores (_), starts with a letter or (_), up to 63 characters. Cannot use system reserved keywords, cannot be postgres, and cannot begin with pg_or tencentdb_
 * @method void setUserName(string $UserName) Set The name of the account created. Consists of letters (a-z, A-Z), numbers (0-9), underscores (_), starts with a letter or (_), up to 63 characters. Cannot use system reserved keywords, cannot be postgres, and cannot begin with pg_or tencentdb_
 * @method string getType() Obtain Account type. currently supported: normal, tencentDBSuper. normal references a general user, tencentDBSuper is an account that possesses the pg_tencentdb_superuser role.
 * @method void setType(string $Type) Set Account type. currently supported: normal, tencentDBSuper. normal references a general user, tencentDBSuper is an account that possesses the pg_tencentdb_superuser role.
 * @method string getPassword() Obtain Specifies the corresponding password for the account. the password rules are as follows:.
<Li>Specifies a length of 8 to 32 characters. a password of more than 12 characters is recommended.</li>.
<Li>Cannot start with "/".</li>.
<Li>Specifies the following four items must be included.</li>.

Valid values: a to z (lowercase letters).           
Uppercase letters: A - Z.
Valid values: 0 - 9.
Special symbols: ()`~!@#$%^&*-+=_|{}[]:<>,.?/.

 * @method void setPassword(string $Password) Set Specifies the corresponding password for the account. the password rules are as follows:.
<Li>Specifies a length of 8 to 32 characters. a password of more than 12 characters is recommended.</li>.
<Li>Cannot start with "/".</li>.
<Li>Specifies the following four items must be included.</li>.

Valid values: a to z (lowercase letters).           
Uppercase letters: A - Z.
Valid values: 0 - 9.
Special symbols: ()`~!@#$%^&*-+=_|{}[]:<>,.?/.

 * @method string getRemark() Obtain Account remark. only allow english letters, digits, underscore, hyphen, and chinese characters, limited to 60 characters.
 * @method void setRemark(string $Remark) Set Account remark. only allow english letters, digits, underscore, hyphen, and chinese characters, limited to 60 characters.
 * @method boolean getOpenCam() Obtain Specifies whether CAM verification is enabled for the account.
 * @method void setOpenCam(boolean $OpenCam) Set Specifies whether CAM verification is enabled for the account.
 */
class CreateAccountRequest extends AbstractModel
{
    /**
     * @var string Instance ID. can be obtained through the DescribeDBInstances api (https://www.tencentcloud.com/document/product/409/16773?lang=en).
     */
    public $DBInstanceId;

    /**
     * @var string The name of the account created. Consists of letters (a-z, A-Z), numbers (0-9), underscores (_), starts with a letter or (_), up to 63 characters. Cannot use system reserved keywords, cannot be postgres, and cannot begin with pg_or tencentdb_
     */
    public $UserName;

    /**
     * @var string Account type. currently supported: normal, tencentDBSuper. normal references a general user, tencentDBSuper is an account that possesses the pg_tencentdb_superuser role.
     */
    public $Type;

    /**
     * @var string Specifies the corresponding password for the account. the password rules are as follows:.
<Li>Specifies a length of 8 to 32 characters. a password of more than 12 characters is recommended.</li>.
<Li>Cannot start with "/".</li>.
<Li>Specifies the following four items must be included.</li>.

Valid values: a to z (lowercase letters).           
Uppercase letters: A - Z.
Valid values: 0 - 9.
Special symbols: ()`~!@#$%^&*-+=_|{}[]:<>,.?/.

     */
    public $Password;

    /**
     * @var string Account remark. only allow english letters, digits, underscore, hyphen, and chinese characters, limited to 60 characters.
     */
    public $Remark;

    /**
     * @var boolean Specifies whether CAM verification is enabled for the account.
     */
    public $OpenCam;

    /**
     * @param string $DBInstanceId Instance ID. can be obtained through the DescribeDBInstances api (https://www.tencentcloud.com/document/product/409/16773?lang=en).
     * @param string $UserName The name of the account created. Consists of letters (a-z, A-Z), numbers (0-9), underscores (_), starts with a letter or (_), up to 63 characters. Cannot use system reserved keywords, cannot be postgres, and cannot begin with pg_or tencentdb_
     * @param string $Type Account type. currently supported: normal, tencentDBSuper. normal references a general user, tencentDBSuper is an account that possesses the pg_tencentdb_superuser role.
     * @param string $Password Specifies the corresponding password for the account. the password rules are as follows:.
<Li>Specifies a length of 8 to 32 characters. a password of more than 12 characters is recommended.</li>.
<Li>Cannot start with "/".</li>.
<Li>Specifies the following four items must be included.</li>.

Valid values: a to z (lowercase letters).           
Uppercase letters: A - Z.
Valid values: 0 - 9.
Special symbols: ()`~!@#$%^&*-+=_|{}[]:<>,.?/.

     * @param string $Remark Account remark. only allow english letters, digits, underscore, hyphen, and chinese characters, limited to 60 characters.
     * @param boolean $OpenCam Specifies whether CAM verification is enabled for the account.
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
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("OpenCam",$param) and $param["OpenCam"] !== null) {
            $this->OpenCam = $param["OpenCam"];
        }
    }
}
