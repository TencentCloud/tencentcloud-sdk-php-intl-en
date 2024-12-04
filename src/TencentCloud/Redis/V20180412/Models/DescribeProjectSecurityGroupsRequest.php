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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeProjectSecurityGroups request structure.
 *
 * @method string getProduct() Obtain Database engine name, which is `redis` for this API.
 * @method void setProduct(string $Product) Set Database engine name, which is `redis` for this API.
 * @method integer getProjectId() Obtain Project ID. Log in to the [Project Management](https://console.tencentcloud.com/project) page of the Redis console and copy the project ID in **Project Name**.
 * @method void setProjectId(integer $ProjectId) Set Project ID. Log in to the [Project Management](https://console.tencentcloud.com/project) page of the Redis console and copy the project ID in **Project Name**.
 * @method integer getOffset() Obtain Offset, which is an integral multiple of `Limit`.
 * @method void setOffset(integer $Offset) Set Offset, which is an integral multiple of `Limit`.
 * @method integer getLimit() Obtain The number of security groups to be pulled. Default value: `20`.
 * @method void setLimit(integer $Limit) Set The number of security groups to be pulled. Default value: `20`.
 * @method string getSearchKey() Obtain Search criteria. You can enter a security group ID or name.
 * @method void setSearchKey(string $SearchKey) Set Search criteria. You can enter a security group ID or name.
 */
class DescribeProjectSecurityGroupsRequest extends AbstractModel
{
    /**
     * @var string Database engine name, which is `redis` for this API.
     */
    public $Product;

    /**
     * @var integer Project ID. Log in to the [Project Management](https://console.tencentcloud.com/project) page of the Redis console and copy the project ID in **Project Name**.
     */
    public $ProjectId;

    /**
     * @var integer Offset, which is an integral multiple of `Limit`.
     */
    public $Offset;

    /**
     * @var integer The number of security groups to be pulled. Default value: `20`.
     */
    public $Limit;

    /**
     * @var string Search criteria. You can enter a security group ID or name.
     */
    public $SearchKey;

    /**
     * @param string $Product Database engine name, which is `redis` for this API.
     * @param integer $ProjectId Project ID. Log in to the [Project Management](https://console.tencentcloud.com/project) page of the Redis console and copy the project ID in **Project Name**.
     * @param integer $Offset Offset, which is an integral multiple of `Limit`.
     * @param integer $Limit The number of security groups to be pulled. Default value: `20`.
     * @param string $SearchKey Search criteria. You can enter a security group ID or name.
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
        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SearchKey",$param) and $param["SearchKey"] !== null) {
            $this->SearchKey = $param["SearchKey"];
        }
    }
}
