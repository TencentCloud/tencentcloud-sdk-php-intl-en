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
namespace TencentCloud\Eiam\V20210420\Models;
use TencentCloud\Common\AbstractModel;

/**
 * List of queried account group information.
 *
 * @method string getAccountGroupId() Obtain Account group ID.
 * @method void setAccountGroupId(string $AccountGroupId) Set Account group ID.
 * @method string getGroupName() Obtain Account group name.
 * @method void setGroupName(string $GroupName) Set Account group name.
 * @method string getDescription() Obtain Remarks.
 * @method void setDescription(string $Description) Set Remarks.
 * @method string getCreatedDate() Obtain Creation time.
 * @method void setCreatedDate(string $CreatedDate) Set Creation time.
 */
class AccountGroupInfo extends AbstractModel
{
    /**
     * @var string Account group ID.
     */
    public $AccountGroupId;

    /**
     * @var string Account group name.
     */
    public $GroupName;

    /**
     * @var string Remarks.
     */
    public $Description;

    /**
     * @var string Creation time.
     */
    public $CreatedDate;

    /**
     * @param string $AccountGroupId Account group ID.
     * @param string $GroupName Account group name.
     * @param string $Description Remarks.
     * @param string $CreatedDate Creation time.
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
        if (array_key_exists("AccountGroupId",$param) and $param["AccountGroupId"] !== null) {
            $this->AccountGroupId = $param["AccountGroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreatedDate",$param) and $param["CreatedDate"] !== null) {
            $this->CreatedDate = $param["CreatedDate"];
        }
    }
}
