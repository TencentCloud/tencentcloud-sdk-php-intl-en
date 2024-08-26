<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Modification history of the cluster configuration files
 *
 * @method string getFileName() Obtain Configuration file's name
 * @method void setFileName(string $FileName) Set Configuration file's name
 * @method string getNewConfValue() Obtain Modified configuration file content; base64 code
 * @method void setNewConfValue(string $NewConfValue) Set Modified configuration file content; base64 code
 * @method string getOldConfValue() Obtain Configuration file content before modification; base64 code
 * @method void setOldConfValue(string $OldConfValue) Set Configuration file content before modification; base64 code
 * @method string getRemark() Obtain Reason for modification
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRemark(string $Remark) Set Reason for modification
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getModifyTime() Obtain Modification time
 * @method void setModifyTime(string $ModifyTime) Set Modification time
 * @method string getUserUin() Obtain Modify sub-account ID
 * @method void setUserUin(string $UserUin) Set Modify sub-account ID
 */
class ClusterConfigsHistory extends AbstractModel
{
    /**
     * @var string Configuration file's name
     */
    public $FileName;

    /**
     * @var string Modified configuration file content; base64 code
     */
    public $NewConfValue;

    /**
     * @var string Configuration file content before modification; base64 code
     */
    public $OldConfValue;

    /**
     * @var string Reason for modification
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Remark;

    /**
     * @var string Modification time
     */
    public $ModifyTime;

    /**
     * @var string Modify sub-account ID
     */
    public $UserUin;

    /**
     * @param string $FileName Configuration file's name
     * @param string $NewConfValue Modified configuration file content; base64 code
     * @param string $OldConfValue Configuration file content before modification; base64 code
     * @param string $Remark Reason for modification
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ModifyTime Modification time
     * @param string $UserUin Modify sub-account ID
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
        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("NewConfValue",$param) and $param["NewConfValue"] !== null) {
            $this->NewConfValue = $param["NewConfValue"];
        }

        if (array_key_exists("OldConfValue",$param) and $param["OldConfValue"] !== null) {
            $this->OldConfValue = $param["OldConfValue"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("UserUin",$param) and $param["UserUin"] !== null) {
            $this->UserUin = $param["UserUin"];
        }
    }
}
