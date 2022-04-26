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
 * List of queried account information.
 *
 * @method string getAccountId() Obtain Account ID.
 * @method void setAccountId(string $AccountId) Set Account ID.
 * @method string getAccountName() Obtain Account name.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAccountName(string $AccountName) Set Account name.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getUserList() Obtain User information list.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUserList(array $UserList) Set User information list.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getDescription() Obtain Description.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Description.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCreatedDate() Obtain Creation time.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCreatedDate(string $CreatedDate) Set Creation time.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class AppAccountInfo extends AbstractModel
{
    /**
     * @var string Account ID.
     */
    public $AccountId;

    /**
     * @var string Account name.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AccountName;

    /**
     * @var array User information list.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $UserList;

    /**
     * @var string Description.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var string Creation time.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CreatedDate;

    /**
     * @param string $AccountId Account ID.
     * @param string $AccountName Account name.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $UserList User information list.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Description Description.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CreatedDate Creation time.
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("AccountId",$param) and $param["AccountId"] !== null) {
            $this->AccountId = $param["AccountId"];
        }

        if (array_key_exists("AccountName",$param) and $param["AccountName"] !== null) {
            $this->AccountName = $param["AccountName"];
        }

        if (array_key_exists("UserList",$param) and $param["UserList"] !== null) {
            $this->UserList = [];
            foreach ($param["UserList"] as $key => $value){
                $obj = new LinkUserInfo();
                $obj->deserialize($value);
                array_push($this->UserList, $obj);
            }
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreatedDate",$param) and $param["CreatedDate"] !== null) {
            $this->CreatedDate = $param["CreatedDate"];
        }
    }
}
