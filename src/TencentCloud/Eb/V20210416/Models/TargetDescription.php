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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Target description
 *
 * @method string getResourceDescription() Obtain Six-Segment QCS resource description. For more information, see [Resource Description Method](https://intl.cloud.tencent.com/document/product/598/10606?from_cn_redirect=1)
 * @method void setResourceDescription(string $ResourceDescription) Set Six-Segment QCS resource description. For more information, see [Resource Description Method](https://intl.cloud.tencent.com/document/product/598/10606?from_cn_redirect=1)
 * @method SCFParams getSCFParams() Obtain SCF parameter
 * @method void setSCFParams(SCFParams $SCFParams) Set SCF parameter
 * @method CkafkaTargetParams getCkafkaTargetParams() Obtain CKafka parameters
 * @method void setCkafkaTargetParams(CkafkaTargetParams $CkafkaTargetParams) Set CKafka parameters
 * @method ESTargetParams getESTargetParams() Obtain ElasticSearch parameters
 * @method void setESTargetParams(ESTargetParams $ESTargetParams) Set ElasticSearch parameters
 */
class TargetDescription extends AbstractModel
{
    /**
     * @var string Six-Segment QCS resource description. For more information, see [Resource Description Method](https://intl.cloud.tencent.com/document/product/598/10606?from_cn_redirect=1)
     */
    public $ResourceDescription;

    /**
     * @var SCFParams SCF parameter
     */
    public $SCFParams;

    /**
     * @var CkafkaTargetParams CKafka parameters
     */
    public $CkafkaTargetParams;

    /**
     * @var ESTargetParams ElasticSearch parameters
     */
    public $ESTargetParams;

    /**
     * @param string $ResourceDescription Six-Segment QCS resource description. For more information, see [Resource Description Method](https://intl.cloud.tencent.com/document/product/598/10606?from_cn_redirect=1)
     * @param SCFParams $SCFParams SCF parameter
     * @param CkafkaTargetParams $CkafkaTargetParams CKafka parameters
     * @param ESTargetParams $ESTargetParams ElasticSearch parameters
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
        if (array_key_exists("ResourceDescription",$param) and $param["ResourceDescription"] !== null) {
            $this->ResourceDescription = $param["ResourceDescription"];
        }

        if (array_key_exists("SCFParams",$param) and $param["SCFParams"] !== null) {
            $this->SCFParams = new SCFParams();
            $this->SCFParams->deserialize($param["SCFParams"]);
        }

        if (array_key_exists("CkafkaTargetParams",$param) and $param["CkafkaTargetParams"] !== null) {
            $this->CkafkaTargetParams = new CkafkaTargetParams();
            $this->CkafkaTargetParams->deserialize($param["CkafkaTargetParams"]);
        }

        if (array_key_exists("ESTargetParams",$param) and $param["ESTargetParams"] !== null) {
            $this->ESTargetParams = new ESTargetParams();
            $this->ESTargetParams->deserialize($param["ESTargetParams"]);
        }
    }
}
