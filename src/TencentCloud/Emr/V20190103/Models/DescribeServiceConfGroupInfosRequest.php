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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeServiceConfGroupInfos request structure.
 *
 * @method string getInstanceId() Obtain Cluster ID.
 * @method void setInstanceId(string $InstanceId) Set Cluster ID.
 * @method string getServiceName() Obtain Component name.
 * @method void setServiceName(string $ServiceName) Set Component name.
 * @method string getConfGroupName() Obtain Configuration group name.
 * @method void setConfGroupName(string $ConfGroupName) Set Configuration group name.
 * @method integer getPageNo() Obtain Page number, starting from 1.
 * @method void setPageNo(integer $PageNo) Set Page number, starting from 1.
 * @method integer getPageSize() Obtain Page size.
 * @method void setPageSize(integer $PageSize) Set Page size.
 */
class DescribeServiceConfGroupInfosRequest extends AbstractModel
{
    /**
     * @var string Cluster ID.
     */
    public $InstanceId;

    /**
     * @var string Component name.
     */
    public $ServiceName;

    /**
     * @var string Configuration group name.
     */
    public $ConfGroupName;

    /**
     * @var integer Page number, starting from 1.
     */
    public $PageNo;

    /**
     * @var integer Page size.
     */
    public $PageSize;

    /**
     * @param string $InstanceId Cluster ID.
     * @param string $ServiceName Component name.
     * @param string $ConfGroupName Configuration group name.
     * @param integer $PageNo Page number, starting from 1.
     * @param integer $PageSize Page size.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("ConfGroupName",$param) and $param["ConfGroupName"] !== null) {
            $this->ConfGroupName = $param["ConfGroupName"];
        }

        if (array_key_exists("PageNo",$param) and $param["PageNo"] !== null) {
            $this->PageNo = $param["PageNo"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
