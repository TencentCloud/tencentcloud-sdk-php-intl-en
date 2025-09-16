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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Workload status.
 *
 * @method integer getReplicas() Obtain Number of current instances.
 * @method void setReplicas(integer $Replicas) Set Number of current instances.
 * @method integer getUpdatedReplicas() Obtain Number of updated instances.
 * @method void setUpdatedReplicas(integer $UpdatedReplicas) Set Number of updated instances.
 * @method integer getReadyReplicas() Obtain Number of ready instances.
 * @method void setReadyReplicas(integer $ReadyReplicas) Set Number of ready instances.
 * @method integer getAvailableReplicas() Obtain Number of available instances.
 * @method void setAvailableReplicas(integer $AvailableReplicas) Set Number of available instances.
 * @method integer getUnavailableReplicas() Obtain Number of unavailable instances.
 * @method void setUnavailableReplicas(integer $UnavailableReplicas) Set Number of unavailable instances.
 * @method string getStatus() Obtain Normal: running.Abnormal: service abnormalities, such as container startup failure.Waiting: service waiting, such as container image pulling.Stopped: stopped.Pending: starting.Stopping: stopping.
 * @method void setStatus(string $Status) Set Normal: running.Abnormal: service abnormalities, such as container startup failure.Waiting: service waiting, such as container image pulling.Stopped: stopped.Pending: starting.Stopping: stopping.
 * @method array getStatefulSetCondition() Obtain Workload status information.
 * @method void setStatefulSetCondition(array $StatefulSetCondition) Set Workload status information.
 * @method array getConditions() Obtain Status information of workload history.
 * @method void setConditions(array $Conditions) Set Status information of workload history.
 * @method string getReason() Obtain Display the reason when the status is abnormal.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReason(string $Reason) Set Display the reason when the status is abnormal.Note: This field may return null, indicating that no valid values can be obtained.
 */
class WorkloadStatus extends AbstractModel
{
    /**
     * @var integer Number of current instances.
     */
    public $Replicas;

    /**
     * @var integer Number of updated instances.
     */
    public $UpdatedReplicas;

    /**
     * @var integer Number of ready instances.
     */
    public $ReadyReplicas;

    /**
     * @var integer Number of available instances.
     */
    public $AvailableReplicas;

    /**
     * @var integer Number of unavailable instances.
     */
    public $UnavailableReplicas;

    /**
     * @var string Normal: running.Abnormal: service abnormalities, such as container startup failure.Waiting: service waiting, such as container image pulling.Stopped: stopped.Pending: starting.Stopping: stopping.
     */
    public $Status;

    /**
     * @var array Workload status information.
     * @deprecated
     */
    public $StatefulSetCondition;

    /**
     * @var array Status information of workload history.
     */
    public $Conditions;

    /**
     * @var string Display the reason when the status is abnormal.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Reason;

    /**
     * @param integer $Replicas Number of current instances.
     * @param integer $UpdatedReplicas Number of updated instances.
     * @param integer $ReadyReplicas Number of ready instances.
     * @param integer $AvailableReplicas Number of available instances.
     * @param integer $UnavailableReplicas Number of unavailable instances.
     * @param string $Status Normal: running.Abnormal: service abnormalities, such as container startup failure.Waiting: service waiting, such as container image pulling.Stopped: stopped.Pending: starting.Stopping: stopping.
     * @param array $StatefulSetCondition Workload status information.
     * @param array $Conditions Status information of workload history.
     * @param string $Reason Display the reason when the status is abnormal.Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Replicas",$param) and $param["Replicas"] !== null) {
            $this->Replicas = $param["Replicas"];
        }

        if (array_key_exists("UpdatedReplicas",$param) and $param["UpdatedReplicas"] !== null) {
            $this->UpdatedReplicas = $param["UpdatedReplicas"];
        }

        if (array_key_exists("ReadyReplicas",$param) and $param["ReadyReplicas"] !== null) {
            $this->ReadyReplicas = $param["ReadyReplicas"];
        }

        if (array_key_exists("AvailableReplicas",$param) and $param["AvailableReplicas"] !== null) {
            $this->AvailableReplicas = $param["AvailableReplicas"];
        }

        if (array_key_exists("UnavailableReplicas",$param) and $param["UnavailableReplicas"] !== null) {
            $this->UnavailableReplicas = $param["UnavailableReplicas"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatefulSetCondition",$param) and $param["StatefulSetCondition"] !== null) {
            $this->StatefulSetCondition = [];
            foreach ($param["StatefulSetCondition"] as $key => $value){
                $obj = new StatefulSetCondition();
                $obj->deserialize($value);
                array_push($this->StatefulSetCondition, $obj);
            }
        }

        if (array_key_exists("Conditions",$param) and $param["Conditions"] !== null) {
            $this->Conditions = [];
            foreach ($param["Conditions"] as $key => $value){
                $obj = new StatefulSetCondition();
                $obj->deserialize($value);
                array_push($this->Conditions, $obj);
            }
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }
    }
}
