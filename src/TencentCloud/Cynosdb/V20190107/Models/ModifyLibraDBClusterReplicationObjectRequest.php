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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLibraDBClusterReplicationObject request structure.
 *
 * @method string getClusterId() Obtain Analysis Cluster ID
 * @method void setClusterId(string $ClusterId) Set Analysis Cluster ID
 * @method string getInstanceId() Obtain Read-only analysis engine instance ID
 * @method void setInstanceId(string $InstanceId) Set Read-only analysis engine instance ID
 * @method string getForceDefaultMapRule() Obtain Map mode
 * @method void setForceDefaultMapRule(string $ForceDefaultMapRule) Set Map mode
 * @method array getObjects() Obtain sync object
 * @method void setObjects(array $Objects) Set sync object
 * @method array getAutoMapRules() Obtain Automated mapping rule
 * @method void setAutoMapRules(array $AutoMapRules) Set Automated mapping rule
 * @method boolean getRefreshMapping() Obtain Whether to refresh existing mapping relationships according to the latest mapping rule
 * @method void setRefreshMapping(boolean $RefreshMapping) Set Whether to refresh existing mapping relationships according to the latest mapping rule
 */
class ModifyLibraDBClusterReplicationObjectRequest extends AbstractModel
{
    /**
     * @var string Analysis Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Read-only analysis engine instance ID
     */
    public $InstanceId;

    /**
     * @var string Map mode
     */
    public $ForceDefaultMapRule;

    /**
     * @var array sync object
     */
    public $Objects;

    /**
     * @var array Automated mapping rule
     */
    public $AutoMapRules;

    /**
     * @var boolean Whether to refresh existing mapping relationships according to the latest mapping rule
     */
    public $RefreshMapping;

    /**
     * @param string $ClusterId Analysis Cluster ID
     * @param string $InstanceId Read-only analysis engine instance ID
     * @param string $ForceDefaultMapRule Map mode
     * @param array $Objects sync object
     * @param array $AutoMapRules Automated mapping rule
     * @param boolean $RefreshMapping Whether to refresh existing mapping relationships according to the latest mapping rule
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ForceDefaultMapRule",$param) and $param["ForceDefaultMapRule"] !== null) {
            $this->ForceDefaultMapRule = $param["ForceDefaultMapRule"];
        }

        if (array_key_exists("Objects",$param) and $param["Objects"] !== null) {
            $this->Objects = [];
            foreach ($param["Objects"] as $key => $value){
                $obj = new ReplicationObject();
                $obj->deserialize($value);
                array_push($this->Objects, $obj);
            }
        }

        if (array_key_exists("AutoMapRules",$param) and $param["AutoMapRules"] !== null) {
            $this->AutoMapRules = [];
            foreach ($param["AutoMapRules"] as $key => $value){
                $obj = new AutoMapRule();
                $obj->deserialize($value);
                array_push($this->AutoMapRules, $obj);
            }
        }

        if (array_key_exists("RefreshMapping",$param) and $param["RefreshMapping"] !== null) {
            $this->RefreshMapping = $param["RefreshMapping"];
        }
    }
}
