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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBillAdjustInfo request structure.
 *
 * @method string getMonth() Obtain Format: yyyy-MM.
Billing month. Either Month or the combination of TimeFrom and TimeTo needs to be passed. If the TimeFrom and TimeTo are passed, the Month field is invalid.
Example: 2024-10.
 * @method void setMonth(string $Month) Set Format: yyyy-MM.
Billing month. Either Month or the combination of TimeFrom and TimeTo needs to be passed. If the TimeFrom and TimeTo are passed, the Month field is invalid.
Example: 2024-10.
 * @method string getTimeFrom() Obtain Format: yyyy-MM-dd.
Start date. Either Month or the combination of TimeFrom and TimeTo needs to be passed. If TimeFrom and TimeTo are passed, the Month field is invalid. TimeFrom and TimeTo should represent the same month and be passed in together. Cross-month queries are not supported. The result will include the full month's data.
Example: 2024-10-01.
 * @method void setTimeFrom(string $TimeFrom) Set Format: yyyy-MM-dd.
Start date. Either Month or the combination of TimeFrom and TimeTo needs to be passed. If TimeFrom and TimeTo are passed, the Month field is invalid. TimeFrom and TimeTo should represent the same month and be passed in together. Cross-month queries are not supported. The result will include the full month's data.
Example: 2024-10-01.
 * @method string getTimeTo() Obtain Format: yyyy-MM-dd.
End date. Either Month or the combination of TimeFrom and TimeTo needs to be passed. If TimeFrom and TimeTo are passed, the Month field is invalid. TimeFrom and TimeTo should represent the same month and be passed in together. Cross-month queries are not supported. The result will include the full month's data.
Example: 2024-10-02.
 * @method void setTimeTo(string $TimeTo) Set Format: yyyy-MM-dd.
End date. Either Month or the combination of TimeFrom and TimeTo needs to be passed. If TimeFrom and TimeTo are passed, the Month field is invalid. TimeFrom and TimeTo should represent the same month and be passed in together. Cross-month queries are not supported. The result will include the full month's data.
Example: 2024-10-02.
 */
class DescribeBillAdjustInfoRequest extends AbstractModel
{
    /**
     * @var string Format: yyyy-MM.
Billing month. Either Month or the combination of TimeFrom and TimeTo needs to be passed. If the TimeFrom and TimeTo are passed, the Month field is invalid.
Example: 2024-10.
     */
    public $Month;

    /**
     * @var string Format: yyyy-MM-dd.
Start date. Either Month or the combination of TimeFrom and TimeTo needs to be passed. If TimeFrom and TimeTo are passed, the Month field is invalid. TimeFrom and TimeTo should represent the same month and be passed in together. Cross-month queries are not supported. The result will include the full month's data.
Example: 2024-10-01.
     */
    public $TimeFrom;

    /**
     * @var string Format: yyyy-MM-dd.
End date. Either Month or the combination of TimeFrom and TimeTo needs to be passed. If TimeFrom and TimeTo are passed, the Month field is invalid. TimeFrom and TimeTo should represent the same month and be passed in together. Cross-month queries are not supported. The result will include the full month's data.
Example: 2024-10-02.
     */
    public $TimeTo;

    /**
     * @param string $Month Format: yyyy-MM.
Billing month. Either Month or the combination of TimeFrom and TimeTo needs to be passed. If the TimeFrom and TimeTo are passed, the Month field is invalid.
Example: 2024-10.
     * @param string $TimeFrom Format: yyyy-MM-dd.
Start date. Either Month or the combination of TimeFrom and TimeTo needs to be passed. If TimeFrom and TimeTo are passed, the Month field is invalid. TimeFrom and TimeTo should represent the same month and be passed in together. Cross-month queries are not supported. The result will include the full month's data.
Example: 2024-10-01.
     * @param string $TimeTo Format: yyyy-MM-dd.
End date. Either Month or the combination of TimeFrom and TimeTo needs to be passed. If TimeFrom and TimeTo are passed, the Month field is invalid. TimeFrom and TimeTo should represent the same month and be passed in together. Cross-month queries are not supported. The result will include the full month's data.
Example: 2024-10-02.
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
        if (array_key_exists("Month",$param) and $param["Month"] !== null) {
            $this->Month = $param["Month"];
        }

        if (array_key_exists("TimeFrom",$param) and $param["TimeFrom"] !== null) {
            $this->TimeFrom = $param["TimeFrom"];
        }

        if (array_key_exists("TimeTo",$param) and $param["TimeTo"] !== null) {
            $this->TimeTo = $param["TimeTo"];
        }
    }
}
