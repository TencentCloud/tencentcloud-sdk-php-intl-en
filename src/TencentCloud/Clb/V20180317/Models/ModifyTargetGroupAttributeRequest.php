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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyTargetGroupAttribute request structure.
 *
 * @method string getTargetGroupId() Obtain Target group ID
 * @method void setTargetGroupId(string $TargetGroupId) Set Target group ID
 * @method string getTargetGroupName() Obtain New name of target group
 * @method void setTargetGroupName(string $TargetGroupName) Set New name of target group
 * @method integer getPort() Obtain The new default port of the target group. this parameter is not supported for full listen target groups.
 * @method void setPort(integer $Port) Set The new default port of the target group. this parameter is not supported for full listen target groups.
 * @method string getScheduleAlgorithm() Obtain Scheduling algorithm. this parameter is valid only for target groups of the new version V2 when the backend forwarding protocol is HTTP, HTTPS, or GRPC. available values:.
<ur><li>WRR: weighted round-robin.</li><li>LEAST_CONN: LEAST connection.</li><li>IP_HASH: based on IP HASH.</li><li>default is WRR.</li></ur>.
 * @method void setScheduleAlgorithm(string $ScheduleAlgorithm) Set Scheduling algorithm. this parameter is valid only for target groups of the new version V2 when the backend forwarding protocol is HTTP, HTTPS, or GRPC. available values:.
<ur><li>WRR: weighted round-robin.</li><li>LEAST_CONN: LEAST connection.</li><li>IP_HASH: based on IP HASH.</li><li>default is WRR.</li></ur>.
 * @method TargetGroupHealthCheck getHealthCheck() Obtain Health check details.
 * @method void setHealthCheck(TargetGroupHealthCheck $HealthCheck) Set Health check details.
 * @method integer getWeight() Obtain Default Weight for backend service. among them: <ul><li>value ranges from 0 to 100.</li><li>after setting this value, when adding a backend service to the target group, if the backend service does not set Weight separately, use the default Weight here.</li><li>Weight parameter settings not supported for v1 target group type.</li></ul>.
 * @method void setWeight(integer $Weight) Set Default Weight for backend service. among them: <ul><li>value ranges from 0 to 100.</li><li>after setting this value, when adding a backend service to the target group, if the backend service does not set Weight separately, use the default Weight here.</li><li>Weight parameter settings not supported for v1 target group type.</li></ul>.
 * @method boolean getKeepaliveEnable() Obtain Specifies whether to enable the persistent connection feature. this parameter applies only to HTTP and HTTPS target groups. true: disable; false: enable. this feature is off by default.
 * @method void setKeepaliveEnable(boolean $KeepaliveEnable) Set Specifies whether to enable the persistent connection feature. this parameter applies only to HTTP and HTTPS target groups. true: disable; false: enable. this feature is off by default.
 * @method integer getSessionExpireTime() Obtain Specifies the session persistence time in seconds. value range: 30-3600. default: 0 (disabled). this parameter is unsupported for TCP/UDP target groups.
 * @method void setSessionExpireTime(integer $SessionExpireTime) Set Specifies the session persistence time in seconds. value range: 30-3600. default: 0 (disabled). this parameter is unsupported for TCP/UDP target groups.
 */
class ModifyTargetGroupAttributeRequest extends AbstractModel
{
    /**
     * @var string Target group ID
     */
    public $TargetGroupId;

    /**
     * @var string New name of target group
     */
    public $TargetGroupName;

    /**
     * @var integer The new default port of the target group. this parameter is not supported for full listen target groups.
     */
    public $Port;

    /**
     * @var string Scheduling algorithm. this parameter is valid only for target groups of the new version V2 when the backend forwarding protocol is HTTP, HTTPS, or GRPC. available values:.
<ur><li>WRR: weighted round-robin.</li><li>LEAST_CONN: LEAST connection.</li><li>IP_HASH: based on IP HASH.</li><li>default is WRR.</li></ur>.
     */
    public $ScheduleAlgorithm;

    /**
     * @var TargetGroupHealthCheck Health check details.
     */
    public $HealthCheck;

    /**
     * @var integer Default Weight for backend service. among them: <ul><li>value ranges from 0 to 100.</li><li>after setting this value, when adding a backend service to the target group, if the backend service does not set Weight separately, use the default Weight here.</li><li>Weight parameter settings not supported for v1 target group type.</li></ul>.
     */
    public $Weight;

    /**
     * @var boolean Specifies whether to enable the persistent connection feature. this parameter applies only to HTTP and HTTPS target groups. true: disable; false: enable. this feature is off by default.
     */
    public $KeepaliveEnable;

    /**
     * @var integer Specifies the session persistence time in seconds. value range: 30-3600. default: 0 (disabled). this parameter is unsupported for TCP/UDP target groups.
     */
    public $SessionExpireTime;

    /**
     * @param string $TargetGroupId Target group ID
     * @param string $TargetGroupName New name of target group
     * @param integer $Port The new default port of the target group. this parameter is not supported for full listen target groups.
     * @param string $ScheduleAlgorithm Scheduling algorithm. this parameter is valid only for target groups of the new version V2 when the backend forwarding protocol is HTTP, HTTPS, or GRPC. available values:.
<ur><li>WRR: weighted round-robin.</li><li>LEAST_CONN: LEAST connection.</li><li>IP_HASH: based on IP HASH.</li><li>default is WRR.</li></ur>.
     * @param TargetGroupHealthCheck $HealthCheck Health check details.
     * @param integer $Weight Default Weight for backend service. among them: <ul><li>value ranges from 0 to 100.</li><li>after setting this value, when adding a backend service to the target group, if the backend service does not set Weight separately, use the default Weight here.</li><li>Weight parameter settings not supported for v1 target group type.</li></ul>.
     * @param boolean $KeepaliveEnable Specifies whether to enable the persistent connection feature. this parameter applies only to HTTP and HTTPS target groups. true: disable; false: enable. this feature is off by default.
     * @param integer $SessionExpireTime Specifies the session persistence time in seconds. value range: 30-3600. default: 0 (disabled). this parameter is unsupported for TCP/UDP target groups.
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
        if (array_key_exists("TargetGroupId",$param) and $param["TargetGroupId"] !== null) {
            $this->TargetGroupId = $param["TargetGroupId"];
        }

        if (array_key_exists("TargetGroupName",$param) and $param["TargetGroupName"] !== null) {
            $this->TargetGroupName = $param["TargetGroupName"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("ScheduleAlgorithm",$param) and $param["ScheduleAlgorithm"] !== null) {
            $this->ScheduleAlgorithm = $param["ScheduleAlgorithm"];
        }

        if (array_key_exists("HealthCheck",$param) and $param["HealthCheck"] !== null) {
            $this->HealthCheck = new TargetGroupHealthCheck();
            $this->HealthCheck->deserialize($param["HealthCheck"]);
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("KeepaliveEnable",$param) and $param["KeepaliveEnable"] !== null) {
            $this->KeepaliveEnable = $param["KeepaliveEnable"];
        }

        if (array_key_exists("SessionExpireTime",$param) and $param["SessionExpireTime"] !== null) {
            $this->SessionExpireTime = $param["SessionExpireTime"];
        }
    }
}
