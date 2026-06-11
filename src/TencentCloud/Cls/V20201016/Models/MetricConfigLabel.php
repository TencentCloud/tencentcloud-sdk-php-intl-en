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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Configuration information of a metric collection label.
 *
 * @method array getMetadata() Obtain Metadata.
support
- `namespace`
- `pod_name`
- `pod_ip`
- `pod_uid`
- `container_name`
- `container_id`
- `image_name`
- `cluster_id`
- `node_id`
- `node_ip`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMetadata(array $Metadata) Set Metadata.
support
- `namespace`
- `pod_name`
- `pod_ip`
- `pod_uid`
- `container_name`
- `container_id`
- `image_name`
- `cluster_id`
- `node_id`
- `node_ip`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method AppointLabel getLabel() Obtain Metadata Pod label information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLabel(AppointLabel $Label) Set Metadata Pod label information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getCustomLabels() Obtain Custom label information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCustomLabels(array $CustomLabels) Set Custom label information.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class MetricConfigLabel extends AbstractModel
{
    /**
     * @var array Metadata.
support
- `namespace`
- `pod_name`
- `pod_ip`
- `pod_uid`
- `container_name`
- `container_id`
- `image_name`
- `cluster_id`
- `node_id`
- `node_ip`
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Metadata;

    /**
     * @var AppointLabel Metadata Pod label information.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Label;

    /**
     * @var array Custom label information.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CustomLabels;

    /**
     * @param array $Metadata Metadata.
support
- `namespace`
- `pod_name`
- `pod_ip`
- `pod_uid`
- `container_name`
- `container_id`
- `image_name`
- `cluster_id`
- `node_id`
- `node_ip`
Note: This field may return null, indicating that no valid values can be obtained.
     * @param AppointLabel $Label Metadata Pod label information.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $CustomLabels Custom label information.
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
        if (array_key_exists("Metadata",$param) and $param["Metadata"] !== null) {
            $this->Metadata = $param["Metadata"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = new AppointLabel();
            $this->Label->deserialize($param["Label"]);
        }

        if (array_key_exists("CustomLabels",$param) and $param["CustomLabels"] !== null) {
            $this->CustomLabels = [];
            foreach ($param["CustomLabels"] as $key => $value){
                $obj = new CustomLabel();
                $obj->deserialize($value);
                array_push($this->CustomLabels, $obj);
            }
        }
    }
}
