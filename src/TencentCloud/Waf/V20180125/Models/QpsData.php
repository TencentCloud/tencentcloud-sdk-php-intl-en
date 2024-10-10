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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Obtain the default value for elastic QPS
 *
 * @method integer getElasticBillingDefault() Obtain Elastic QPS Default Value

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setElasticBillingDefault(integer $ElasticBillingDefault) Set Elastic QPS Default Value

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getElasticBillingMin() Obtain Elastic QPS Minimum Value

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setElasticBillingMin(integer $ElasticBillingMin) Set Elastic QPS Minimum Value

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getElasticBillingMax() Obtain Maximum Elastic QPS

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setElasticBillingMax(integer $ElasticBillingMax) Set Maximum Elastic QPS

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getQPSExtendMax() Obtain Maximum QPS for Business Expansion Package

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setQPSExtendMax(integer $QPSExtendMax) Set Maximum QPS for Business Expansion Package

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getQPSExtendIntlMax() Obtain Maximum QPS for Overseas Business Expansion Package

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setQPSExtendIntlMax(integer $QPSExtendIntlMax) Set Maximum QPS for Overseas Business Expansion Package

Note: This field may return null, indicating that no valid values can be obtained.
 */
class QpsData extends AbstractModel
{
    /**
     * @var integer Elastic QPS Default Value

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ElasticBillingDefault;

    /**
     * @var integer Elastic QPS Minimum Value

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ElasticBillingMin;

    /**
     * @var integer Maximum Elastic QPS

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ElasticBillingMax;

    /**
     * @var integer Maximum QPS for Business Expansion Package

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $QPSExtendMax;

    /**
     * @var integer Maximum QPS for Overseas Business Expansion Package

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $QPSExtendIntlMax;

    /**
     * @param integer $ElasticBillingDefault Elastic QPS Default Value

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ElasticBillingMin Elastic QPS Minimum Value

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ElasticBillingMax Maximum Elastic QPS

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $QPSExtendMax Maximum QPS for Business Expansion Package

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $QPSExtendIntlMax Maximum QPS for Overseas Business Expansion Package

Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("ElasticBillingDefault",$param) and $param["ElasticBillingDefault"] !== null) {
            $this->ElasticBillingDefault = $param["ElasticBillingDefault"];
        }

        if (array_key_exists("ElasticBillingMin",$param) and $param["ElasticBillingMin"] !== null) {
            $this->ElasticBillingMin = $param["ElasticBillingMin"];
        }

        if (array_key_exists("ElasticBillingMax",$param) and $param["ElasticBillingMax"] !== null) {
            $this->ElasticBillingMax = $param["ElasticBillingMax"];
        }

        if (array_key_exists("QPSExtendMax",$param) and $param["QPSExtendMax"] !== null) {
            $this->QPSExtendMax = $param["QPSExtendMax"];
        }

        if (array_key_exists("QPSExtendIntlMax",$param) and $param["QPSExtendIntlMax"] !== null) {
            $this->QPSExtendIntlMax = $param["QPSExtendIntlMax"];
        }
    }
}
