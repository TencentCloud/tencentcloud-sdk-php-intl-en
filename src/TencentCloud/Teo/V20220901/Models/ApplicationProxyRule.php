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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Application proxy rule
 *
 * @method string getProto() Obtain Protocol. Valid values:
<li>TCP: TCP protocol;</li>
<li>UDP: UDP protocol.</li>
 * @method void setProto(string $Proto) Set Protocol. Valid values:
<li>TCP: TCP protocol;</li>
<li>UDP: UDP protocol.</li>
 * @method array getPort() Obtain Port. Supported formats:
<li>A single port, such as 80.</li>
<li>A port range, such as 81-82, indicating two ports 81 and 82.</li>
Note: Up to 20 ports can be input for each rule.
 * @method void setPort(array $Port) Set Port. Supported formats:
<li>A single port, such as 80.</li>
<li>A port range, such as 81-82, indicating two ports 81 and 82.</li>
Note: Up to 20 ports can be input for each rule.
 * @method string getOriginType() Obtain Origin server type. Valid values:
<li>custom: manually added;</li>
<li>loadbalancer: cloud load balancer;</li>
<li>origins: origin server group.</li>
 * @method void setOriginType(string $OriginType) Set Origin server type. Valid values:
<li>custom: manually added;</li>
<li>loadbalancer: cloud load balancer;</li>
<li>origins: origin server group.</li>
 * @method array getOriginValue() Obtain Origin server information.
<li>When OriginType is custom, it indicates one or more origin servers, such as `["8.8.8.8","9.9.9.9"]` or `OriginValue=["test.com"]`;</li>
<li>When OriginType is loadbalancer, it indicates a cloud load balancer, such as ["lb-xdffsfasdfs"];</li>
<li>When OriginType is origins, it requires one and only one element, indicating the origin server group ID, such as ["origin-537f5b41-162a-11ed-abaa-525400c5da15"].</li>
 * @method void setOriginValue(array $OriginValue) Set Origin server information.
<li>When OriginType is custom, it indicates one or more origin servers, such as `["8.8.8.8","9.9.9.9"]` or `OriginValue=["test.com"]`;</li>
<li>When OriginType is loadbalancer, it indicates a cloud load balancer, such as ["lb-xdffsfasdfs"];</li>
<li>When OriginType is origins, it requires one and only one element, indicating the origin server group ID, such as ["origin-537f5b41-162a-11ed-abaa-525400c5da15"].</li>
 * @method string getRuleId() Obtain Rule ID.
 * @method void setRuleId(string $RuleId) Set Rule ID.
 * @method string getStatus() Obtain Status. Valid values:
<li>online: enabled;</li>
<li>offline: disabled;</li>
<li>progress: deploying;</li>
<li>stopping: disabling;</li>
<li>fail: deployment or disabling failed.</li>
 * @method void setStatus(string $Status) Set Status. Valid values:
<li>online: enabled;</li>
<li>offline: disabled;</li>
<li>progress: deploying;</li>
<li>stopping: disabling;</li>
<li>fail: deployment or disabling failed.</li>
 * @method string getForwardClientIp() Obtain Passing the client IP address. Valid values:
<li>TOA: passing via TOA, available only when Proto = TCP;</li>
<li>PPV1: passing via Proxy Protocol V1, available only when Proto = TCP;</li>
<li>PPV2: passing via Proxy Protocol V2;</li>
<li>OFF: no passing.</li>Default value: OFF.
 * @method void setForwardClientIp(string $ForwardClientIp) Set Passing the client IP address. Valid values:
<li>TOA: passing via TOA, available only when Proto = TCP;</li>
<li>PPV1: passing via Proxy Protocol V1, available only when Proto = TCP;</li>
<li>PPV2: passing via Proxy Protocol V2;</li>
<li>OFF: no passing.</li>Default value: OFF.
 * @method boolean getSessionPersist() Obtain Whether to enable session persistence. Valid values:
<li>true: Enable;</li>
<li>false: Disable.</li>Default value: false.
 * @method void setSessionPersist(boolean $SessionPersist) Set Whether to enable session persistence. Valid values:
<li>true: Enable;</li>
<li>false: Disable.</li>Default value: false.
 * @method integer getSessionPersistTime() Obtain Duration for session persistence. The value takes effect only when SessionPersist is true.
Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method void setSessionPersistTime(integer $SessionPersistTime) Set Duration for session persistence. The value takes effect only when SessionPersist is true.
Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method string getOriginPort() Obtain Origin server port. Supported formats:
<li>A single port, such as 80.</li>
<li>A port range, such as 81-82, indicating two ports 81 and 82.</li>
 * @method void setOriginPort(string $OriginPort) Set Origin server port. Supported formats:
<li>A single port, such as 80.</li>
<li>A port range, such as 81-82, indicating two ports 81 and 82.</li>
 * @method string getRuleTag() Obtain Rule tag.
Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method void setRuleTag(string $RuleTag) Set Rule tag.
Note: This field may return null, which indicates a failure to obtain a valid value.
 */
class ApplicationProxyRule extends AbstractModel
{
    /**
     * @var string Protocol. Valid values:
<li>TCP: TCP protocol;</li>
<li>UDP: UDP protocol.</li>
     */
    public $Proto;

    /**
     * @var array Port. Supported formats:
<li>A single port, such as 80.</li>
<li>A port range, such as 81-82, indicating two ports 81 and 82.</li>
Note: Up to 20 ports can be input for each rule.
     */
    public $Port;

    /**
     * @var string Origin server type. Valid values:
<li>custom: manually added;</li>
<li>loadbalancer: cloud load balancer;</li>
<li>origins: origin server group.</li>
     */
    public $OriginType;

    /**
     * @var array Origin server information.
<li>When OriginType is custom, it indicates one or more origin servers, such as `["8.8.8.8","9.9.9.9"]` or `OriginValue=["test.com"]`;</li>
<li>When OriginType is loadbalancer, it indicates a cloud load balancer, such as ["lb-xdffsfasdfs"];</li>
<li>When OriginType is origins, it requires one and only one element, indicating the origin server group ID, such as ["origin-537f5b41-162a-11ed-abaa-525400c5da15"].</li>
     */
    public $OriginValue;

    /**
     * @var string Rule ID.
     */
    public $RuleId;

    /**
     * @var string Status. Valid values:
<li>online: enabled;</li>
<li>offline: disabled;</li>
<li>progress: deploying;</li>
<li>stopping: disabling;</li>
<li>fail: deployment or disabling failed.</li>
     */
    public $Status;

    /**
     * @var string Passing the client IP address. Valid values:
<li>TOA: passing via TOA, available only when Proto = TCP;</li>
<li>PPV1: passing via Proxy Protocol V1, available only when Proto = TCP;</li>
<li>PPV2: passing via Proxy Protocol V2;</li>
<li>OFF: no passing.</li>Default value: OFF.
     */
    public $ForwardClientIp;

    /**
     * @var boolean Whether to enable session persistence. Valid values:
<li>true: Enable;</li>
<li>false: Disable.</li>Default value: false.
     */
    public $SessionPersist;

    /**
     * @var integer Duration for session persistence. The value takes effect only when SessionPersist is true.
Note: This field may return null, which indicates a failure to obtain a valid value.
     */
    public $SessionPersistTime;

    /**
     * @var string Origin server port. Supported formats:
<li>A single port, such as 80.</li>
<li>A port range, such as 81-82, indicating two ports 81 and 82.</li>
     */
    public $OriginPort;

    /**
     * @var string Rule tag.
Note: This field may return null, which indicates a failure to obtain a valid value.
     */
    public $RuleTag;

    /**
     * @param string $Proto Protocol. Valid values:
<li>TCP: TCP protocol;</li>
<li>UDP: UDP protocol.</li>
     * @param array $Port Port. Supported formats:
<li>A single port, such as 80.</li>
<li>A port range, such as 81-82, indicating two ports 81 and 82.</li>
Note: Up to 20 ports can be input for each rule.
     * @param string $OriginType Origin server type. Valid values:
<li>custom: manually added;</li>
<li>loadbalancer: cloud load balancer;</li>
<li>origins: origin server group.</li>
     * @param array $OriginValue Origin server information.
<li>When OriginType is custom, it indicates one or more origin servers, such as `["8.8.8.8","9.9.9.9"]` or `OriginValue=["test.com"]`;</li>
<li>When OriginType is loadbalancer, it indicates a cloud load balancer, such as ["lb-xdffsfasdfs"];</li>
<li>When OriginType is origins, it requires one and only one element, indicating the origin server group ID, such as ["origin-537f5b41-162a-11ed-abaa-525400c5da15"].</li>
     * @param string $RuleId Rule ID.
     * @param string $Status Status. Valid values:
<li>online: enabled;</li>
<li>offline: disabled;</li>
<li>progress: deploying;</li>
<li>stopping: disabling;</li>
<li>fail: deployment or disabling failed.</li>
     * @param string $ForwardClientIp Passing the client IP address. Valid values:
<li>TOA: passing via TOA, available only when Proto = TCP;</li>
<li>PPV1: passing via Proxy Protocol V1, available only when Proto = TCP;</li>
<li>PPV2: passing via Proxy Protocol V2;</li>
<li>OFF: no passing.</li>Default value: OFF.
     * @param boolean $SessionPersist Whether to enable session persistence. Valid values:
<li>true: Enable;</li>
<li>false: Disable.</li>Default value: false.
     * @param integer $SessionPersistTime Duration for session persistence. The value takes effect only when SessionPersist is true.
Note: This field may return null, which indicates a failure to obtain a valid value.
     * @param string $OriginPort Origin server port. Supported formats:
<li>A single port, such as 80.</li>
<li>A port range, such as 81-82, indicating two ports 81 and 82.</li>
     * @param string $RuleTag Rule tag.
Note: This field may return null, which indicates a failure to obtain a valid value.
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
        if (array_key_exists("Proto",$param) and $param["Proto"] !== null) {
            $this->Proto = $param["Proto"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("OriginType",$param) and $param["OriginType"] !== null) {
            $this->OriginType = $param["OriginType"];
        }

        if (array_key_exists("OriginValue",$param) and $param["OriginValue"] !== null) {
            $this->OriginValue = $param["OriginValue"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ForwardClientIp",$param) and $param["ForwardClientIp"] !== null) {
            $this->ForwardClientIp = $param["ForwardClientIp"];
        }

        if (array_key_exists("SessionPersist",$param) and $param["SessionPersist"] !== null) {
            $this->SessionPersist = $param["SessionPersist"];
        }

        if (array_key_exists("SessionPersistTime",$param) and $param["SessionPersistTime"] !== null) {
            $this->SessionPersistTime = $param["SessionPersistTime"];
        }

        if (array_key_exists("OriginPort",$param) and $param["OriginPort"] !== null) {
            $this->OriginPort = $param["OriginPort"];
        }

        if (array_key_exists("RuleTag",$param) and $param["RuleTag"] !== null) {
            $this->RuleTag = $param["RuleTag"];
        }
    }
}
