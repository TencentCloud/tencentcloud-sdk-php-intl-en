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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BatchDescribeDocument request structure.
 *
 * @method integer getSdkAppId() Obtain The SDKAppID assigned by LCIC.
 * @method void setSdkAppId(integer $SdkAppId) Set The SDKAppID assigned by LCIC.
 * @method integer getPage() Obtain The page to return records from. Pagination starts from 1.
 * @method void setPage(integer $Page) Set The page to return records from. Pagination starts from 1.
 * @method integer getLimit() Obtain The maximum number of records per page. The value of this parameter cannot exceed `1000`.
 * @method void setLimit(integer $Limit) Set The maximum number of records per page. The value of this parameter cannot exceed `1000`.
 * @method array getPermission() Obtain The courseware access. [0]: The private courseware of the specified user (`Owner`) will be returned; [1]: The public courseware of the specified user will be returned; [0,1]: Both the private and public courseware of the specified user will be returned; [2]: The private courseware of the specified user and the public courseware of all users (including `Owner`) will be returned.
 * @method void setPermission(array $Permission) Set The courseware access. [0]: The private courseware of the specified user (`Owner`) will be returned; [1]: The public courseware of the specified user will be returned; [0,1]: Both the private and public courseware of the specified user will be returned; [2]: The private courseware of the specified user and the public courseware of all users (including `Owner`) will be returned.
 * @method string getOwner() Obtain The user ID of the courseware owner. If you do not specify this, the information of all courseware under the application will be returned.
 * @method void setOwner(string $Owner) Set The user ID of the courseware owner. If you do not specify this, the information of all courseware under the application will be returned.
 * @method string getKeyword() Obtain The filename keyword.
 * @method void setKeyword(string $Keyword) Set The filename keyword.
 * @method array getDocumentId() Obtain The courseware IDs. Non-existent IDs will be ignored.
 * @method void setDocumentId(array $DocumentId) Set The courseware IDs. Non-existent IDs will be ignored.
 */
class BatchDescribeDocumentRequest extends AbstractModel
{
    /**
     * @var integer The SDKAppID assigned by LCIC.
     */
    public $SdkAppId;

    /**
     * @var integer The page to return records from. Pagination starts from 1.
     */
    public $Page;

    /**
     * @var integer The maximum number of records per page. The value of this parameter cannot exceed `1000`.
     */
    public $Limit;

    /**
     * @var array The courseware access. [0]: The private courseware of the specified user (`Owner`) will be returned; [1]: The public courseware of the specified user will be returned; [0,1]: Both the private and public courseware of the specified user will be returned; [2]: The private courseware of the specified user and the public courseware of all users (including `Owner`) will be returned.
     */
    public $Permission;

    /**
     * @var string The user ID of the courseware owner. If you do not specify this, the information of all courseware under the application will be returned.
     */
    public $Owner;

    /**
     * @var string The filename keyword.
     */
    public $Keyword;

    /**
     * @var array The courseware IDs. Non-existent IDs will be ignored.
     */
    public $DocumentId;

    /**
     * @param integer $SdkAppId The SDKAppID assigned by LCIC.
     * @param integer $Page The page to return records from. Pagination starts from 1.
     * @param integer $Limit The maximum number of records per page. The value of this parameter cannot exceed `1000`.
     * @param array $Permission The courseware access. [0]: The private courseware of the specified user (`Owner`) will be returned; [1]: The public courseware of the specified user will be returned; [0,1]: Both the private and public courseware of the specified user will be returned; [2]: The private courseware of the specified user and the public courseware of all users (including `Owner`) will be returned.
     * @param string $Owner The user ID of the courseware owner. If you do not specify this, the information of all courseware under the application will be returned.
     * @param string $Keyword The filename keyword.
     * @param array $DocumentId The courseware IDs. Non-existent IDs will be ignored.
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

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("DocumentId",$param) and $param["DocumentId"] !== null) {
            $this->DocumentId = $param["DocumentId"];
        }
    }
}
