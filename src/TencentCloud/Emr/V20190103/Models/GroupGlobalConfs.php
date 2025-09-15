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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Global parameter information of all scaling groups in the cluster.
 *
 * @method AutoScaleResourceConf getGroupGlobalConf() Obtain Scaling group information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGroupGlobalConf(AutoScaleResourceConf $GroupGlobalConf) Set Scaling group information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCurrentNodes() Obtain Number of nodes scaled out in the current scaling group.
 * @method void setCurrentNodes(integer $CurrentNodes) Set Number of nodes scaled out in the current scaling group.
 * @method integer getCurrentPostPaidNodes() Obtain Number of postpaid nodes scaled out in the current scaling group.
 * @method void setCurrentPostPaidNodes(integer $CurrentPostPaidNodes) Set Number of postpaid nodes scaled out in the current scaling group.
 * @method integer getCurrentSpotPaidNodes() Obtain Number of spot instance nodes scaled out in the current scaling group.
 * @method void setCurrentSpotPaidNodes(integer $CurrentSpotPaidNodes) Set Number of spot instance nodes scaled out in the current scaling group.
 */
class GroupGlobalConfs extends AbstractModel
{
    /**
     * @var AutoScaleResourceConf Scaling group information.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GroupGlobalConf;

    /**
     * @var integer Number of nodes scaled out in the current scaling group.
     */
    public $CurrentNodes;

    /**
     * @var integer Number of postpaid nodes scaled out in the current scaling group.
     */
    public $CurrentPostPaidNodes;

    /**
     * @var integer Number of spot instance nodes scaled out in the current scaling group.
     */
    public $CurrentSpotPaidNodes;

    /**
     * @param AutoScaleResourceConf $GroupGlobalConf Scaling group information.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $CurrentNodes Number of nodes scaled out in the current scaling group.
     * @param integer $CurrentPostPaidNodes Number of postpaid nodes scaled out in the current scaling group.
     * @param integer $CurrentSpotPaidNodes Number of spot instance nodes scaled out in the current scaling group.
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
        if (array_key_exists("GroupGlobalConf",$param) and $param["GroupGlobalConf"] !== null) {
            $this->GroupGlobalConf = new AutoScaleResourceConf();
            $this->GroupGlobalConf->deserialize($param["GroupGlobalConf"]);
        }

        if (array_key_exists("CurrentNodes",$param) and $param["CurrentNodes"] !== null) {
            $this->CurrentNodes = $param["CurrentNodes"];
        }

        if (array_key_exists("CurrentPostPaidNodes",$param) and $param["CurrentPostPaidNodes"] !== null) {
            $this->CurrentPostPaidNodes = $param["CurrentPostPaidNodes"];
        }

        if (array_key_exists("CurrentSpotPaidNodes",$param) and $param["CurrentSpotPaidNodes"] !== null) {
            $this->CurrentSpotPaidNodes = $param["CurrentSpotPaidNodes"];
        }
    }
}
