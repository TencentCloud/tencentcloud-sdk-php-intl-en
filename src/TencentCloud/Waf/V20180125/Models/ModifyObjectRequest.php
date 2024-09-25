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
 * ModifyObject request structure.
 *
 * @method string getObjectId() Obtain Modifies the object identifier
 * @method void setObjectId(string $ObjectId) Set Modifies the object identifier
 * @method string getOpType() Obtain Action type. Status: change enabling status; InstanceId: bind to an instance; Proxy: set the proxy status.
 * @method void setOpType(string $OpType) Set Action type. Status: change enabling status; InstanceId: bind to an instance; Proxy: set the proxy status.
 * @method integer getStatus() Obtain New WAF switch status, considered successful if identical to existing status
 * @method void setStatus(integer $Status) Set New WAF switch status, considered successful if identical to existing status
 * @method string getInstanceId() Obtain New instance ID: considered a successful modification if identical to an already bound instance
 * @method void setInstanceId(string $InstanceId) Set New instance ID: considered a successful modification if identical to an already bound instance
 * @method integer getProxy() Obtain Whether to enable proxy. 0: do not enable; 1: use the first IP address in XFF as the client IP address; 2: use remote_addr as the client IP address; 3: obtain the client IP address from the specified header field that is given in IpHeaders. (This value is effective when OpType is set to Status or Proxy.)
 * @method void setProxy(integer $Proxy) Set Whether to enable proxy. 0: do not enable; 1: use the first IP address in XFF as the client IP address; 2: use remote_addr as the client IP address; 3: obtain the client IP address from the specified header field that is given in IpHeaders. (This value is effective when OpType is set to Status or Proxy.)
 * @method array getIpHeaders() Obtain This parameter indicates a custom header and is required when IsCdn is set to 3. (The value is effective when OpType is set to Status or Proxy.)
 * @method void setIpHeaders(array $IpHeaders) Set This parameter indicates a custom header and is required when IsCdn is set to 3. (The value is effective when OpType is set to Status or Proxy.)
 */
class ModifyObjectRequest extends AbstractModel
{
    /**
     * @var string Modifies the object identifier
     */
    public $ObjectId;

    /**
     * @var string Action type. Status: change enabling status; InstanceId: bind to an instance; Proxy: set the proxy status.
     */
    public $OpType;

    /**
     * @var integer New WAF switch status, considered successful if identical to existing status
     */
    public $Status;

    /**
     * @var string New instance ID: considered a successful modification if identical to an already bound instance
     */
    public $InstanceId;

    /**
     * @var integer Whether to enable proxy. 0: do not enable; 1: use the first IP address in XFF as the client IP address; 2: use remote_addr as the client IP address; 3: obtain the client IP address from the specified header field that is given in IpHeaders. (This value is effective when OpType is set to Status or Proxy.)
     */
    public $Proxy;

    /**
     * @var array This parameter indicates a custom header and is required when IsCdn is set to 3. (The value is effective when OpType is set to Status or Proxy.)
     */
    public $IpHeaders;

    /**
     * @param string $ObjectId Modifies the object identifier
     * @param string $OpType Action type. Status: change enabling status; InstanceId: bind to an instance; Proxy: set the proxy status.
     * @param integer $Status New WAF switch status, considered successful if identical to existing status
     * @param string $InstanceId New instance ID: considered a successful modification if identical to an already bound instance
     * @param integer $Proxy Whether to enable proxy. 0: do not enable; 1: use the first IP address in XFF as the client IP address; 2: use remote_addr as the client IP address; 3: obtain the client IP address from the specified header field that is given in IpHeaders. (This value is effective when OpType is set to Status or Proxy.)
     * @param array $IpHeaders This parameter indicates a custom header and is required when IsCdn is set to 3. (The value is effective when OpType is set to Status or Proxy.)
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
        if (array_key_exists("ObjectId",$param) and $param["ObjectId"] !== null) {
            $this->ObjectId = $param["ObjectId"];
        }

        if (array_key_exists("OpType",$param) and $param["OpType"] !== null) {
            $this->OpType = $param["OpType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Proxy",$param) and $param["Proxy"] !== null) {
            $this->Proxy = $param["Proxy"];
        }

        if (array_key_exists("IpHeaders",$param) and $param["IpHeaders"] !== null) {
            $this->IpHeaders = $param["IpHeaders"];
        }
    }
}
