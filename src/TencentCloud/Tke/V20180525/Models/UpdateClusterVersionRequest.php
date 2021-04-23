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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateClusterVersion request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getDstVersion() Obtain The version that needs to upgrade to
 * @method void setDstVersion(string $DstVersion) Set The version that needs to upgrade to
 * @method ClusterExtraArgs getExtraArgs() Obtain Cluster custom parameter
 * @method void setExtraArgs(ClusterExtraArgs $ExtraArgs) Set Cluster custom parameter
 * @method float getMaxNotReadyPercent() Obtain The maximum tolerable number of unavailable pods
 * @method void setMaxNotReadyPercent(float $MaxNotReadyPercent) Set The maximum tolerable number of unavailable pods
 * @method boolean getSkipPreCheck() Obtain Whether to skip the precheck
 * @method void setSkipPreCheck(boolean $SkipPreCheck) Set Whether to skip the precheck
 */
class UpdateClusterVersionRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string The version that needs to upgrade to
     */
    public $DstVersion;

    /**
     * @var ClusterExtraArgs Cluster custom parameter
     */
    public $ExtraArgs;

    /**
     * @var float The maximum tolerable number of unavailable pods
     */
    public $MaxNotReadyPercent;

    /**
     * @var boolean Whether to skip the precheck
     */
    public $SkipPreCheck;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $DstVersion The version that needs to upgrade to
     * @param ClusterExtraArgs $ExtraArgs Cluster custom parameter
     * @param float $MaxNotReadyPercent The maximum tolerable number of unavailable pods
     * @param boolean $SkipPreCheck Whether to skip the precheck
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

        if (array_key_exists("DstVersion",$param) and $param["DstVersion"] !== null) {
            $this->DstVersion = $param["DstVersion"];
        }

        if (array_key_exists("ExtraArgs",$param) and $param["ExtraArgs"] !== null) {
            $this->ExtraArgs = new ClusterExtraArgs();
            $this->ExtraArgs->deserialize($param["ExtraArgs"]);
        }

        if (array_key_exists("MaxNotReadyPercent",$param) and $param["MaxNotReadyPercent"] !== null) {
            $this->MaxNotReadyPercent = $param["MaxNotReadyPercent"];
        }

        if (array_key_exists("SkipPreCheck",$param) and $param["SkipPreCheck"] !== null) {
            $this->SkipPreCheck = $param["SkipPreCheck"];
        }
    }
}
