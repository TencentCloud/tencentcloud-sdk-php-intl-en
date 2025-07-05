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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDocumentsByRoom request structure.
 *
 * @method integer getRoomId() Obtain The room ID.
 * @method void setRoomId(integer $RoomId) Set The room ID.
 * @method integer getSdkAppId() Obtain The SDKAppID assigned by LCIC.
 * @method void setSdkAppId(integer $SdkAppId) Set The SDKAppID assigned by LCIC.
 * @method integer getPage() Obtain The page to return records from. Pagination starts from 1, which is also the default value of this parameter.
 * @method void setPage(integer $Page) Set The page to return records from. Pagination starts from 1, which is also the default value of this parameter.
 * @method integer getLimit() Obtain The maximum number of records to return per page. The maximum value can be 1000. The default value is 100.
 * @method void setLimit(integer $Limit) Set The maximum number of records to return per page. The maximum value can be 1000. The default value is 100.
 * @method array getPermission() Obtain The document access type. [0]: The private documents of the owner. [1]: The public documents of the owner. [0,1]: The private and public documents of the owner. [2]: The private and public documents of all users (including the owner). Default value: [2].
 * @method void setPermission(array $Permission) Set The document access type. [0]: The private documents of the owner. [1]: The public documents of the owner. [0,1]: The private and public documents of the owner. [2]: The private and public documents of all users (including the owner). Default value: [2].
 * @method string getOwner() Obtain The user ID of the document owner. If you do not specify this, the information of all documents under the application will be returned.
 * @method void setOwner(string $Owner) Set The user ID of the document owner. If you do not specify this, the information of all documents under the application will be returned.
 */
class DescribeDocumentsByRoomRequest extends AbstractModel
{
    /**
     * @var integer The room ID.
     */
    public $RoomId;

    /**
     * @var integer The SDKAppID assigned by LCIC.
     */
    public $SdkAppId;

    /**
     * @var integer The page to return records from. Pagination starts from 1, which is also the default value of this parameter.
     */
    public $Page;

    /**
     * @var integer The maximum number of records to return per page. The maximum value can be 1000. The default value is 100.
     */
    public $Limit;

    /**
     * @var array The document access type. [0]: The private documents of the owner. [1]: The public documents of the owner. [0,1]: The private and public documents of the owner. [2]: The private and public documents of all users (including the owner). Default value: [2].
     */
    public $Permission;

    /**
     * @var string The user ID of the document owner. If you do not specify this, the information of all documents under the application will be returned.
     */
    public $Owner;

    /**
     * @param integer $RoomId The room ID.
     * @param integer $SdkAppId The SDKAppID assigned by LCIC.
     * @param integer $Page The page to return records from. Pagination starts from 1, which is also the default value of this parameter.
     * @param integer $Limit The maximum number of records to return per page. The maximum value can be 1000. The default value is 100.
     * @param array $Permission The document access type. [0]: The private documents of the owner. [1]: The public documents of the owner. [0,1]: The private and public documents of the owner. [2]: The private and public documents of all users (including the owner). Default value: [2].
     * @param string $Owner The user ID of the document owner. If you do not specify this, the information of all documents under the application will be returned.
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
        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Permission",$param) and $param["Permission"] !== null) {
            $this->Permission = $param["Permission"];
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }
    }
}
