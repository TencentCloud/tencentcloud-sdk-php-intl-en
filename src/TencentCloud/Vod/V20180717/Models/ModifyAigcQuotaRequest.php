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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAigcQuota request structure.
 *
 * @method integer getSubAppId() Obtain <p><strong>VOD application ID. For customers who activate on-demand services after December 25, 2023, this field must be filled in with the app ID when accessing resources in on-demand applications, whether in the default application or a newly created application.</strong></p>
 * @method void setSubAppId(integer $SubAppId) Set <p><strong>VOD application ID. For customers who activate on-demand services after December 25, 2023, this field must be filled in with the app ID when accessing resources in on-demand applications, whether in the default application or a newly created application.</strong></p>
 * @method string getQuotaType() Obtain <p>Quota type</p><p>Enumeration values:</p><ul><li>Image: AIGC image task</li><li>Video: AIGC video task</li><li>Text: AIGC text task</li></ul>
 * @method void setQuotaType(string $QuotaType) Set <p>Quota type</p><p>Enumeration values:</p><ul><li>Image: AIGC image task</li><li>Video: AIGC video task</li><li>Text: AIGC text task</li></ul>
 * @method integer getQuotaLimit() Obtain <p>Number of quotas for the task.</p><p>Unit: images/second/tokens.</p><ul><li>When QuotaType is Image, the unit is images;</li><li>When QuotaType is Video, the unit is seconds;</li><li>When QuotaType is Text, the unit is tokens.</li></ul>
 * @method void setQuotaLimit(integer $QuotaLimit) Set <p>Number of quotas for the task.</p><p>Unit: images/second/tokens.</p><ul><li>When QuotaType is Image, the unit is images;</li><li>When QuotaType is Video, the unit is seconds;</li><li>When QuotaType is Text, the unit is tokens.</li></ul>
 * @method string getApiToken() Obtain <p>Valid only when QuotaType=Text, used to select the ApiToken that requires quota limit</p>
 * @method void setApiToken(string $ApiToken) Set <p>Valid only when QuotaType=Text, used to select the ApiToken that requires quota limit</p>
 * @method string getQuotaPeriod() Obtain <p>Quota reset cycle.</p><p>Enumeration values:</p><ul><li>Day: Reset daily.</li><li>Month: Reset on a specified date per month.</li><li>Total: Never reset. The QuotaLimit parameter is the total quota.</li></ul>
 * @method void setQuotaPeriod(string $QuotaPeriod) Set <p>Quota reset cycle.</p><p>Enumeration values:</p><ul><li>Day: Reset daily.</li><li>Month: Reset on a specified date per month.</li><li>Total: Never reset. The QuotaLimit parameter is the total quota.</li></ul>
 * @method integer getResetDay() Obtain <p>Reset date of the monthly quota. Valid only when QuotaPeriod=Month.</p><p>If the selected date does not exist in the current month, the reset will be postponed to 00:00 on the 1st of the next month.</p>
 * @method void setResetDay(integer $ResetDay) Set <p>Reset date of the monthly quota. Valid only when QuotaPeriod=Month.</p><p>If the selected date does not exist in the current month, the reset will be postponed to 00:00 on the 1st of the next month.</p>
 * @method string getModelQuotaSwitch() Obtain <p>Whether to set specified quotas for each model</p><p>Enumeration values: </p><ul><li>ON: Enable</li><li>OFF: Disable</li></ul>
 * @method void setModelQuotaSwitch(string $ModelQuotaSwitch) Set <p>Whether to set specified quotas for each model</p><p>Enumeration values: </p><ul><li>ON: Enable</li><li>OFF: Disable</li></ul>
 * @method array getModelQuotas() Obtain <p>Quota set for each model, valid only when ModelQuotaSwitch=ON.</p>
 * @method void setModelQuotas(array $ModelQuotas) Set <p>Quota set for each model, valid only when ModelQuotaSwitch=ON.</p>
 */
class ModifyAigcQuotaRequest extends AbstractModel
{
    /**
     * @var integer <p><strong>VOD application ID. For customers who activate on-demand services after December 25, 2023, this field must be filled in with the app ID when accessing resources in on-demand applications, whether in the default application or a newly created application.</strong></p>
     */
    public $SubAppId;

    /**
     * @var string <p>Quota type</p><p>Enumeration values:</p><ul><li>Image: AIGC image task</li><li>Video: AIGC video task</li><li>Text: AIGC text task</li></ul>
     */
    public $QuotaType;

    /**
     * @var integer <p>Number of quotas for the task.</p><p>Unit: images/second/tokens.</p><ul><li>When QuotaType is Image, the unit is images;</li><li>When QuotaType is Video, the unit is seconds;</li><li>When QuotaType is Text, the unit is tokens.</li></ul>
     */
    public $QuotaLimit;

    /**
     * @var string <p>Valid only when QuotaType=Text, used to select the ApiToken that requires quota limit</p>
     */
    public $ApiToken;

    /**
     * @var string <p>Quota reset cycle.</p><p>Enumeration values:</p><ul><li>Day: Reset daily.</li><li>Month: Reset on a specified date per month.</li><li>Total: Never reset. The QuotaLimit parameter is the total quota.</li></ul>
     */
    public $QuotaPeriod;

    /**
     * @var integer <p>Reset date of the monthly quota. Valid only when QuotaPeriod=Month.</p><p>If the selected date does not exist in the current month, the reset will be postponed to 00:00 on the 1st of the next month.</p>
     */
    public $ResetDay;

    /**
     * @var string <p>Whether to set specified quotas for each model</p><p>Enumeration values: </p><ul><li>ON: Enable</li><li>OFF: Disable</li></ul>
     */
    public $ModelQuotaSwitch;

    /**
     * @var array <p>Quota set for each model, valid only when ModelQuotaSwitch=ON.</p>
     */
    public $ModelQuotas;

    /**
     * @param integer $SubAppId <p><strong>VOD application ID. For customers who activate on-demand services after December 25, 2023, this field must be filled in with the app ID when accessing resources in on-demand applications, whether in the default application or a newly created application.</strong></p>
     * @param string $QuotaType <p>Quota type</p><p>Enumeration values:</p><ul><li>Image: AIGC image task</li><li>Video: AIGC video task</li><li>Text: AIGC text task</li></ul>
     * @param integer $QuotaLimit <p>Number of quotas for the task.</p><p>Unit: images/second/tokens.</p><ul><li>When QuotaType is Image, the unit is images;</li><li>When QuotaType is Video, the unit is seconds;</li><li>When QuotaType is Text, the unit is tokens.</li></ul>
     * @param string $ApiToken <p>Valid only when QuotaType=Text, used to select the ApiToken that requires quota limit</p>
     * @param string $QuotaPeriod <p>Quota reset cycle.</p><p>Enumeration values:</p><ul><li>Day: Reset daily.</li><li>Month: Reset on a specified date per month.</li><li>Total: Never reset. The QuotaLimit parameter is the total quota.</li></ul>
     * @param integer $ResetDay <p>Reset date of the monthly quota. Valid only when QuotaPeriod=Month.</p><p>If the selected date does not exist in the current month, the reset will be postponed to 00:00 on the 1st of the next month.</p>
     * @param string $ModelQuotaSwitch <p>Whether to set specified quotas for each model</p><p>Enumeration values: </p><ul><li>ON: Enable</li><li>OFF: Disable</li></ul>
     * @param array $ModelQuotas <p>Quota set for each model, valid only when ModelQuotaSwitch=ON.</p>
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
        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("QuotaType",$param) and $param["QuotaType"] !== null) {
            $this->QuotaType = $param["QuotaType"];
        }

        if (array_key_exists("QuotaLimit",$param) and $param["QuotaLimit"] !== null) {
            $this->QuotaLimit = $param["QuotaLimit"];
        }

        if (array_key_exists("ApiToken",$param) and $param["ApiToken"] !== null) {
            $this->ApiToken = $param["ApiToken"];
        }

        if (array_key_exists("QuotaPeriod",$param) and $param["QuotaPeriod"] !== null) {
            $this->QuotaPeriod = $param["QuotaPeriod"];
        }

        if (array_key_exists("ResetDay",$param) and $param["ResetDay"] !== null) {
            $this->ResetDay = $param["ResetDay"];
        }

        if (array_key_exists("ModelQuotaSwitch",$param) and $param["ModelQuotaSwitch"] !== null) {
            $this->ModelQuotaSwitch = $param["ModelQuotaSwitch"];
        }

        if (array_key_exists("ModelQuotas",$param) and $param["ModelQuotas"] !== null) {
            $this->ModelQuotas = [];
            foreach ($param["ModelQuotas"] as $key => $value){
                $obj = new AigcModelQuota();
                $obj->deserialize($value);
                array_push($this->ModelQuotas, $obj);
            }
        }
    }
}
