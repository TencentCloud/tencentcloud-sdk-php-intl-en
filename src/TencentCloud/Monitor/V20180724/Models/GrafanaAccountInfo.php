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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TCMG authorized account information
 *
 * @method string getUserId() Obtain User account ID
 * @method void setUserId(string $UserId) Set User account ID
 * @method array getRole() Obtain User permission
 * @method void setRole(array $Role) Set User permission
 * @method string getNotes() Obtain Remarks
 * @method void setNotes(string $Notes) Set Remarks
 * @method string getCreateAt() Obtain Creation time
 * @method void setCreateAt(string $CreateAt) Set Creation time
 * @method string getInstanceId() Obtain Instance ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceId(string $InstanceId) Set Instance ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUin() Obtain User’s root account UIN
 * @method void setUin(string $Uin) Set User’s root account UIN
 */
class GrafanaAccountInfo extends AbstractModel
{
    /**
     * @var string User account ID
     */
    public $UserId;

    /**
     * @var array User permission
     */
    public $Role;

    /**
     * @var string Remarks
     */
    public $Notes;

    /**
     * @var string Creation time
     */
    public $CreateAt;

    /**
     * @var string Instance ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceId;

    /**
     * @var string User’s root account UIN
     */
    public $Uin;

    /**
     * @param string $UserId User account ID
     * @param array $Role User permission
     * @param string $Notes Remarks
     * @param string $CreateAt Creation time
     * @param string $InstanceId Instance ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Uin User’s root account UIN
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = [];
            foreach ($param["Role"] as $key => $value){
                $obj = new GrafanaAccountRole();
                $obj->deserialize($value);
                array_push($this->Role, $obj);
            }
        }

        if (array_key_exists("Notes",$param) and $param["Notes"] !== null) {
            $this->Notes = $param["Notes"];
        }

        if (array_key_exists("CreateAt",$param) and $param["CreateAt"] !== null) {
            $this->CreateAt = $param["CreateAt"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }
    }
}
