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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Project.
 *
 * @method string getProjectId() Obtain Project ID.
 * @method void setProjectId(string $ProjectId) Set Project ID.
 * @method string getName() Obtain Project name.
 * @method void setName(string $Name) Set Project name.
 * @method string getDescription() Obtain Project description.

Note: This field may return null, indicating that no valid value is found.
 * @method void setDescription(string $Description) Set Project description.

Note: This field may return null, indicating that no valid value is found.
 * @method array getTags() Obtain Tags.

Note: This field may return null, indicating that no valid value is found.
 * @method void setTags(array $Tags) Set Tags.

Note: This field may return null, indicating that no valid value is found.
 * @method integer getStatus() Obtain Project status.
 * @method void setStatus(integer $Status) Set Project status.
 * @method string getCreatedAt() Obtain Create time.
 * @method void setCreatedAt(string $CreatedAt) Set Create time.
 * @method string getUpdatedAt() Obtain Update time.
 * @method void setUpdatedAt(string $UpdatedAt) Set Update time.
 * @method integer getAppId() Obtain App ID.
 * @method void setAppId(integer $AppId) Set App ID.
 * @method string getUin() Obtain Uin.
 * @method void setUin(string $Uin) Set Uin.
 * @method string getSubAccountUin() Obtain Sub account uin.
 * @method void setSubAccountUin(string $SubAccountUin) Set Sub account uin.
 */
class Project extends AbstractModel
{
    /**
     * @var string Project ID.
     */
    public $ProjectId;

    /**
     * @var string Project name.
     */
    public $Name;

    /**
     * @var string Project description.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Description;

    /**
     * @var array Tags.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Tags;

    /**
     * @var integer Project status.
     */
    public $Status;

    /**
     * @var string Create time.
     */
    public $CreatedAt;

    /**
     * @var string Update time.
     */
    public $UpdatedAt;

    /**
     * @var integer App ID.
     */
    public $AppId;

    /**
     * @var string Uin.
     */
    public $Uin;

    /**
     * @var string Sub account uin.
     */
    public $SubAccountUin;

    /**
     * @param string $ProjectId Project ID.
     * @param string $Name Project name.
     * @param string $Description Project description.

Note: This field may return null, indicating that no valid value is found.
     * @param array $Tags Tags.

Note: This field may return null, indicating that no valid value is found.
     * @param integer $Status Project status.
     * @param string $CreatedAt Create time.
     * @param string $UpdatedAt Update time.
     * @param integer $AppId App ID.
     * @param string $Uin Uin.
     * @param string $SubAccountUin Sub account uin.
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagSpec();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("SubAccountUin",$param) and $param["SubAccountUin"] !== null) {
            $this->SubAccountUin = $param["SubAccountUin"];
        }
    }
}
