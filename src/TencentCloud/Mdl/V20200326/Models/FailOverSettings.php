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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Input failover settings
 *
 * @method string getSecondaryInputId() Obtain ID of the backup input
Note: this field may return `null`, indicating that no valid value was found.
 * @method void setSecondaryInputId(string $SecondaryInputId) Set ID of the backup input
Note: this field may return `null`, indicating that no valid value was found.
 * @method integer getLossThreshold() Obtain The wait time (ms) for triggering failover after the primary input becomes unavailable. Value range: [1000, 86400000]. Default value: `3000`
 * @method void setLossThreshold(integer $LossThreshold) Set The wait time (ms) for triggering failover after the primary input becomes unavailable. Value range: [1000, 86400000]. Default value: `3000`
 * @method string getRecoverBehavior() Obtain Failover policy. Valid values: `CURRENT_PREFERRED` (default), `PRIMARY_PREFERRED`
 * @method void setRecoverBehavior(string $RecoverBehavior) Set Failover policy. Valid values: `CURRENT_PREFERRED` (default), `PRIMARY_PREFERRED`
 */
class FailOverSettings extends AbstractModel
{
    /**
     * @var string ID of the backup input
Note: this field may return `null`, indicating that no valid value was found.
     */
    public $SecondaryInputId;

    /**
     * @var integer The wait time (ms) for triggering failover after the primary input becomes unavailable. Value range: [1000, 86400000]. Default value: `3000`
     */
    public $LossThreshold;

    /**
     * @var string Failover policy. Valid values: `CURRENT_PREFERRED` (default), `PRIMARY_PREFERRED`
     */
    public $RecoverBehavior;

    /**
     * @param string $SecondaryInputId ID of the backup input
Note: this field may return `null`, indicating that no valid value was found.
     * @param integer $LossThreshold The wait time (ms) for triggering failover after the primary input becomes unavailable. Value range: [1000, 86400000]. Default value: `3000`
     * @param string $RecoverBehavior Failover policy. Valid values: `CURRENT_PREFERRED` (default), `PRIMARY_PREFERRED`
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
        if (array_key_exists("SecondaryInputId",$param) and $param["SecondaryInputId"] !== null) {
            $this->SecondaryInputId = $param["SecondaryInputId"];
        }

        if (array_key_exists("LossThreshold",$param) and $param["LossThreshold"] !== null) {
            $this->LossThreshold = $param["LossThreshold"];
        }

        if (array_key_exists("RecoverBehavior",$param) and $param["RecoverBehavior"] !== null) {
            $this->RecoverBehavior = $param["RecoverBehavior"];
        }
    }
}
