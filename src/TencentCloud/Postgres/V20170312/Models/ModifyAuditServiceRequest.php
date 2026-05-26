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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAuditService request structure.
 *
 * @method string getInstanceId() Obtain <p>Instance ID</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID</p>
 * @method integer getLogExpireDay() Obtain <p>Log retention duration (days)</p><p>Enumeration value:</p><ul><li>7: 7 days</li><li>30: 30 days</li><li>90: 90 days</li><li>180: 180 days</li><li>365: 365 days</li><li>1095: 1095 days</li><li>1825: 1825 days</li></ul>
 * @method void setLogExpireDay(integer $LogExpireDay) Set <p>Log retention duration (days)</p><p>Enumeration value:</p><ul><li>7: 7 days</li><li>30: 30 days</li><li>90: 90 days</li><li>180: 180 days</li><li>365: 365 days</li><li>1095: 1095 days</li><li>1825: 1825 days</li></ul>
 * @method integer getHotLogExpireDay() Obtain <p>High-frequency storage duration (days)</p><p>Enumeration value:</p><ul><li>7: 7 days</li><li>30: 30 days</li><li>90: 90 days</li><li>180: 180 days</li><li>365: 365 days</li><li>1095: 1095 days</li><li>1825: 1825 days</li></ul>
 * @method void setHotLogExpireDay(integer $HotLogExpireDay) Set <p>High-frequency storage duration (days)</p><p>Enumeration value:</p><ul><li>7: 7 days</li><li>30: 30 days</li><li>90: 90 days</li><li>180: 180 days</li><li>365: 365 days</li><li>1095: 1095 days</li><li>1825: 1825 days</li></ul>
 * @method string getAuditType() Obtain <p>Audit type</p><p>Enumeration value:</p><ul><li>complex: Granular audit. The audit log is more comprehensive, including object types and objects. Once enabled, it has a certain impact on performance.</li><li>simple: Fast Audit. The audit log covers most fields. When enabled, it has a smaller impact on performance.</li></ul>
 * @method void setAuditType(string $AuditType) Set <p>Audit type</p><p>Enumeration value:</p><ul><li>complex: Granular audit. The audit log is more comprehensive, including object types and objects. Once enabled, it has a certain impact on performance.</li><li>simple: Fast Audit. The audit log covers most fields. When enabled, it has a smaller impact on performance.</li></ul>
 * @method string getProduct() Obtain <p>Product name</p><p>Input parameter limit: postgres</p>
 * @method void setProduct(string $Product) Set <p>Product name</p><p>Input parameter limit: postgres</p>
 */
class ModifyAuditServiceRequest extends AbstractModel
{
    /**
     * @var string <p>Instance ID</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>Log retention duration (days)</p><p>Enumeration value:</p><ul><li>7: 7 days</li><li>30: 30 days</li><li>90: 90 days</li><li>180: 180 days</li><li>365: 365 days</li><li>1095: 1095 days</li><li>1825: 1825 days</li></ul>
     */
    public $LogExpireDay;

    /**
     * @var integer <p>High-frequency storage duration (days)</p><p>Enumeration value:</p><ul><li>7: 7 days</li><li>30: 30 days</li><li>90: 90 days</li><li>180: 180 days</li><li>365: 365 days</li><li>1095: 1095 days</li><li>1825: 1825 days</li></ul>
     */
    public $HotLogExpireDay;

    /**
     * @var string <p>Audit type</p><p>Enumeration value:</p><ul><li>complex: Granular audit. The audit log is more comprehensive, including object types and objects. Once enabled, it has a certain impact on performance.</li><li>simple: Fast Audit. The audit log covers most fields. When enabled, it has a smaller impact on performance.</li></ul>
     */
    public $AuditType;

    /**
     * @var string <p>Product name</p><p>Input parameter limit: postgres</p>
     */
    public $Product;

    /**
     * @param string $InstanceId <p>Instance ID</p>
     * @param integer $LogExpireDay <p>Log retention duration (days)</p><p>Enumeration value:</p><ul><li>7: 7 days</li><li>30: 30 days</li><li>90: 90 days</li><li>180: 180 days</li><li>365: 365 days</li><li>1095: 1095 days</li><li>1825: 1825 days</li></ul>
     * @param integer $HotLogExpireDay <p>High-frequency storage duration (days)</p><p>Enumeration value:</p><ul><li>7: 7 days</li><li>30: 30 days</li><li>90: 90 days</li><li>180: 180 days</li><li>365: 365 days</li><li>1095: 1095 days</li><li>1825: 1825 days</li></ul>
     * @param string $AuditType <p>Audit type</p><p>Enumeration value:</p><ul><li>complex: Granular audit. The audit log is more comprehensive, including object types and objects. Once enabled, it has a certain impact on performance.</li><li>simple: Fast Audit. The audit log covers most fields. When enabled, it has a smaller impact on performance.</li></ul>
     * @param string $Product <p>Product name</p><p>Input parameter limit: postgres</p>
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

        if (array_key_exists("LogExpireDay",$param) and $param["LogExpireDay"] !== null) {
            $this->LogExpireDay = $param["LogExpireDay"];
        }

        if (array_key_exists("HotLogExpireDay",$param) and $param["HotLogExpireDay"] !== null) {
            $this->HotLogExpireDay = $param["HotLogExpireDay"];
        }

        if (array_key_exists("AuditType",$param) and $param["AuditType"] !== null) {
            $this->AuditType = $param["AuditType"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }
    }
}
