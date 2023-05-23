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
 * Connection description
 *
 * @method string getResourceDescription() Obtain Six-Segment QCS resource description. For more information, see [Resource Description Method](https://intl.cloud.tencent.com/document/product/598/10606?from_cn_redirect=1)
 * @method void setResourceDescription(string $ResourceDescription) Set Six-Segment QCS resource description. For more information, see [Resource Description Method](https://intl.cloud.tencent.com/document/product/598/10606?from_cn_redirect=1)
 * @method APIGWParams getAPIGWParams() Obtain API Gateway parameters
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAPIGWParams(APIGWParams $APIGWParams) Set API Gateway parameters
Note: this field may return null, indicating that no valid values can be obtained.
 * @method CkafkaParams getCkafkaParams() Obtain CKafka parameters
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCkafkaParams(CkafkaParams $CkafkaParams) Set CKafka parameters
Note: this field may return null, indicating that no valid values can be obtained.
 * @method DTSParams getDTSParams() Obtain Data Transfer Service (DTS) connector information
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setDTSParams(DTSParams $DTSParams) Set Data Transfer Service (DTS) connector information
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class ConnectionDescription extends AbstractModel
{
    /**
     * @var string Six-Segment QCS resource description. For more information, see [Resource Description Method](https://intl.cloud.tencent.com/document/product/598/10606?from_cn_redirect=1)
     */
    public $ResourceDescription;

    /**
     * @var APIGWParams API Gateway parameters
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $APIGWParams;

    /**
     * @var CkafkaParams CKafka parameters
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CkafkaParams;

    /**
     * @var DTSParams Data Transfer Service (DTS) connector information
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $DTSParams;

    /**
     * @param string $ResourceDescription Six-Segment QCS resource description. For more information, see [Resource Description Method](https://intl.cloud.tencent.com/document/product/598/10606?from_cn_redirect=1)
     * @param APIGWParams $APIGWParams API Gateway parameters
Note: this field may return null, indicating that no valid values can be obtained.
     * @param CkafkaParams $CkafkaParams CKafka parameters
Note: this field may return null, indicating that no valid values can be obtained.
     * @param DTSParams $DTSParams Data Transfer Service (DTS) connector information
Note: This field may return `null`, indicating that no valid values can be obtained.
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

        if (array_key_exists("APIGWParams",$param) and $param["APIGWParams"] !== null) {
            $this->APIGWParams = new APIGWParams();
            $this->APIGWParams->deserialize($param["APIGWParams"]);
        }

        if (array_key_exists("CkafkaParams",$param) and $param["CkafkaParams"] !== null) {
            $this->CkafkaParams = new CkafkaParams();
            $this->CkafkaParams->deserialize($param["CkafkaParams"]);
        }

        if (array_key_exists("DTSParams",$param) and $param["DTSParams"] !== null) {
            $this->DTSParams = new DTSParams();
            $this->DTSParams->deserialize($param["DTSParams"]);
        }
    }
}
