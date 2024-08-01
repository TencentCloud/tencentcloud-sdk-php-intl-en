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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GrantDLCCatalogAccess request structure.
 *
 * @method string getVpcId() Obtain Authorized VpcId
 * @method void setVpcId(string $VpcId) Set Authorized VpcId
 * @method string getProduct() Obtain Product (EMR|DLC|Doris|Inlong|Wedata)
 * @method void setProduct(string $Product) Set Product (EMR|DLC|Doris|Inlong|Wedata)
 * @method string getDescription() Obtain Description
 * @method void setDescription(string $Description) Set Description
 * @method string getVpcUin() Obtain UIN of the account to which VPC belongs
 * @method void setVpcUin(string $VpcUin) Set UIN of the account to which VPC belongs
 * @method integer getVpcAppId() Obtain AppId of the account to which VPC belongs
 * @method void setVpcAppId(integer $VpcAppId) Set AppId of the account to which VPC belongs
 */
class GrantDLCCatalogAccessRequest extends AbstractModel
{
    /**
     * @var string Authorized VpcId
     */
    public $VpcId;

    /**
     * @var string Product (EMR|DLC|Doris|Inlong|Wedata)
     */
    public $Product;

    /**
     * @var string Description
     */
    public $Description;

    /**
     * @var string UIN of the account to which VPC belongs
     */
    public $VpcUin;

    /**
     * @var integer AppId of the account to which VPC belongs
     */
    public $VpcAppId;

    /**
     * @param string $VpcId Authorized VpcId
     * @param string $Product Product (EMR|DLC|Doris|Inlong|Wedata)
     * @param string $Description Description
     * @param string $VpcUin UIN of the account to which VPC belongs
     * @param integer $VpcAppId AppId of the account to which VPC belongs
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("VpcUin",$param) and $param["VpcUin"] !== null) {
            $this->VpcUin = $param["VpcUin"];
        }

        if (array_key_exists("VpcAppId",$param) and $param["VpcAppId"] !== null) {
            $this->VpcAppId = $param["VpcAppId"];
        }
    }
}
