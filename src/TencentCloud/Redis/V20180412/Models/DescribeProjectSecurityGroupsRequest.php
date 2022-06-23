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
 * @method string getProduct() Obtain Database engine name: mariadb, cdb, cynosdb, dcdb, redis, mongodb.
 * @method void setProduct(string $Product) Set Database engine name: mariadb, cdb, cynosdb, dcdb, redis, mongodb.
 * @method integer getProjectId() Obtain Project ID.
 * @method void setProjectId(integer $ProjectId) Set Project ID.
 * @method integer getOffset() Obtain Offset.
 * @method void setOffset(integer $Offset) Set Offset.
 * @method integer getLimit() Obtain The number of security groups to be pulled.
 * @method void setLimit(integer $Limit) Set The number of security groups to be pulled.
 * @method string getSearchKey() Obtain Search criteria. You can enter a security group ID or name.
 * @method void setSearchKey(string $SearchKey) Set Search criteria. You can enter a security group ID or name.
 */
class DescribeProjectSecurityGroupsRequest extends AbstractModel
{
    /**
     * @var string Database engine name: mariadb, cdb, cynosdb, dcdb, redis, mongodb.
     */
    public $Product;

    /**
     * @var integer Project ID.
     */
    public $ProjectId;

    /**
     * @var integer Offset.
     */
    public $Offset;

    /**
     * @var integer The number of security groups to be pulled.
     */
    public $Limit;

    /**
     * @var string Search criteria. You can enter a security group ID or name.
     */
    public $SearchKey;

    /**
     * @param string $Product Database engine name: mariadb, cdb, cynosdb, dcdb, redis, mongodb.
     * @param integer $ProjectId Project ID.
     * @param integer $Offset Offset.
     * @param integer $Limit The number of security groups to be pulled.
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
