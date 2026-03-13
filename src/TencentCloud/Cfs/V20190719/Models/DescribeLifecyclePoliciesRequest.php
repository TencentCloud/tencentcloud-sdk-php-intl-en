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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLifecyclePolicies request structure.
 *
 * @method string getLifecyclePolicyName() Obtain Lifecycle management policy name.
 * @method void setLifecyclePolicyName(string $LifecyclePolicyName) Set Lifecycle management policy name.
 * @method integer getPageSize() Obtain Number of lifecycle management policies per page.
 * @method void setPageSize(integer $PageSize) Set Number of lifecycle management policies per page.
 * @method integer getPageNumber() Obtain Page number of the list.
 * @method void setPageNumber(integer $PageNumber) Set Page number of the list.
 * @method string getFileSystemId() Obtain File system ID.
 * @method void setFileSystemId(string $FileSystemId) Set File system ID.
 * @method string getLifecyclePolicyID() Obtain Lifecycle management policy ID.
 * @method void setLifecyclePolicyID(string $LifecyclePolicyID) Set Lifecycle management policy ID.
 */
class DescribeLifecyclePoliciesRequest extends AbstractModel
{
    /**
     * @var string Lifecycle management policy name.
     */
    public $LifecyclePolicyName;

    /**
     * @var integer Number of lifecycle management policies per page.
     */
    public $PageSize;

    /**
     * @var integer Page number of the list.
     */
    public $PageNumber;

    /**
     * @var string File system ID.
     */
    public $FileSystemId;

    /**
     * @var string Lifecycle management policy ID.
     */
    public $LifecyclePolicyID;

    /**
     * @param string $LifecyclePolicyName Lifecycle management policy name.
     * @param integer $PageSize Number of lifecycle management policies per page.
     * @param integer $PageNumber Page number of the list.
     * @param string $FileSystemId File system ID.
     * @param string $LifecyclePolicyID Lifecycle management policy ID.
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
        if (array_key_exists("LifecyclePolicyName",$param) and $param["LifecyclePolicyName"] !== null) {
            $this->LifecyclePolicyName = $param["LifecyclePolicyName"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("LifecyclePolicyID",$param) and $param["LifecyclePolicyID"] !== null) {
            $this->LifecyclePolicyID = $param["LifecyclePolicyID"];
        }
    }
}
