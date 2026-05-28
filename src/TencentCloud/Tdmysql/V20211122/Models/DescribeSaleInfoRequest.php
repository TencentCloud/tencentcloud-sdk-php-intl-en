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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSaleInfo request structure.
 *
 * @method string getSrcRegion() Obtain <p>Region of the disaster recovery primary instance</p>
 * @method void setSrcRegion(string $SrcRegion) Set <p>Region of the disaster recovery primary instance</p>
 * @method string getInstanceId() Obtain <p>Instance id</p><p>Input this parameter to return the sales information of the availability zone in the region where this instance is located.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance id</p><p>Input this parameter to return the sales information of the availability zone in the region where this instance is located.</p>
 * @method string getInstanceType() Obtain <p>Specify the sales information that supports a certain type instance.</p><p>Enumeration value:</p><ul><li>serverless: Returns all regions that support serverless instance type.</li></ul><p>Default value: None</p><p>Currently only support specifying serverless. Import other info or leave it blank to return all sales region information by default.</p>
 * @method void setInstanceType(string $InstanceType) Set <p>Specify the sales information that supports a certain type instance.</p><p>Enumeration value:</p><ul><li>serverless: Returns all regions that support serverless instance type.</li></ul><p>Default value: None</p><p>Currently only support specifying serverless. Import other info or leave it blank to return all sales region information by default.</p>
 */
class DescribeSaleInfoRequest extends AbstractModel
{
    /**
     * @var string <p>Region of the disaster recovery primary instance</p>
     */
    public $SrcRegion;

    /**
     * @var string <p>Instance id</p><p>Input this parameter to return the sales information of the availability zone in the region where this instance is located.</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Specify the sales information that supports a certain type instance.</p><p>Enumeration value:</p><ul><li>serverless: Returns all regions that support serverless instance type.</li></ul><p>Default value: None</p><p>Currently only support specifying serverless. Import other info or leave it blank to return all sales region information by default.</p>
     */
    public $InstanceType;

    /**
     * @param string $SrcRegion <p>Region of the disaster recovery primary instance</p>
     * @param string $InstanceId <p>Instance id</p><p>Input this parameter to return the sales information of the availability zone in the region where this instance is located.</p>
     * @param string $InstanceType <p>Specify the sales information that supports a certain type instance.</p><p>Enumeration value:</p><ul><li>serverless: Returns all regions that support serverless instance type.</li></ul><p>Default value: None</p><p>Currently only support specifying serverless. Import other info or leave it blank to return all sales region information by default.</p>
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
        if (array_key_exists("SrcRegion",$param) and $param["SrcRegion"] !== null) {
            $this->SrcRegion = $param["SrcRegion"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }
    }
}
