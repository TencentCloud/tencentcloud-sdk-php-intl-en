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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Specifies the serial number of the instance hostname related settings.
 *
 * @method boolean getEnabled() Obtain <p>Whether to enable serial number creation for instance hostname. not enabled by default. valid values:</p><p>TRUE: enable serial number creation for instance hostname. FALSE: disable serial number creation for instance hostname.</p>.
 * @method void setEnabled(boolean $Enabled) Set <p>Whether to enable serial number creation for instance hostname. not enabled by default. valid values:</p><p>TRUE: enable serial number creation for instance hostname. FALSE: disable serial number creation for instance hostname.</p>.
 * @method integer getBeginIndex() Obtain <p>Initial serial number. value range depends on the IndexLength parameter: - when IndexLength is 0, value range is [0, 99999999]. - when IndexLength is [1, 8], value range is [0, 10^IndexLength-1], and the maximum value is the maximum digit of the specified length. default value of initial serial number is as follows: - first-time enabling incremental serial number: default value is 0 (display digits depend on IndexLength, for example if IndexLength is 4, display value is 0000). - non-first-time enabling incremental serial number: continuation of previous incremental serial number, for example if last usage incremented to serial number 069, new default value is 070. note: modification of initial serial number may lead to duplication within the scaling group.</p>.
 * @method void setBeginIndex(integer $BeginIndex) Set <p>Initial serial number. value range depends on the IndexLength parameter: - when IndexLength is 0, value range is [0, 99999999]. - when IndexLength is [1, 8], value range is [0, 10^IndexLength-1], and the maximum value is the maximum digit of the specified length. default value of initial serial number is as follows: - first-time enabling incremental serial number: default value is 0 (display digits depend on IndexLength, for example if IndexLength is 4, display value is 0000). - non-first-time enabling incremental serial number: continuation of previous incremental serial number, for example if last usage incremented to serial number 069, new default value is 070. note: modification of initial serial number may lead to duplication within the scaling group.</p>.
 * @method integer getIndexLength() Obtain <P>Incremental serial number length, defaults to 0, means no specified length. value range: 0-8, maximum is integer 8. - length set to 3, display form: 000, 001, 002 ... 010, 011 ... 100 ... 999, maximum is 999. - length set to 0, display form: 0, 1, 2 ... 10, 11 ... 100 ... 1000 ... 10000 ... 99999999, maximum is 99999999. note: continuous incremental serial number exceeding the limit can cause scale-out failure. do not set too small incremental serial number length.</p>.
 * @method void setIndexLength(integer $IndexLength) Set <P>Incremental serial number length, defaults to 0, means no specified length. value range: 0-8, maximum is integer 8. - length set to 3, display form: 000, 001, 002 ... 010, 011 ... 100 ... 999, maximum is 999. - length set to 0, display form: 0, 1, 2 ... 10, 11 ... 100 ... 1000 ... 10000 ... 99999999, maximum is 99999999. note: continuous incremental serial number exceeding the limit can cause scale-out failure. do not set too small incremental serial number length.</p>.
 */
class HostNameIndexSettings extends AbstractModel
{
    /**
     * @var boolean <p>Whether to enable serial number creation for instance hostname. not enabled by default. valid values:</p><p>TRUE: enable serial number creation for instance hostname. FALSE: disable serial number creation for instance hostname.</p>.
     */
    public $Enabled;

    /**
     * @var integer <p>Initial serial number. value range depends on the IndexLength parameter: - when IndexLength is 0, value range is [0, 99999999]. - when IndexLength is [1, 8], value range is [0, 10^IndexLength-1], and the maximum value is the maximum digit of the specified length. default value of initial serial number is as follows: - first-time enabling incremental serial number: default value is 0 (display digits depend on IndexLength, for example if IndexLength is 4, display value is 0000). - non-first-time enabling incremental serial number: continuation of previous incremental serial number, for example if last usage incremented to serial number 069, new default value is 070. note: modification of initial serial number may lead to duplication within the scaling group.</p>.
     */
    public $BeginIndex;

    /**
     * @var integer <P>Incremental serial number length, defaults to 0, means no specified length. value range: 0-8, maximum is integer 8. - length set to 3, display form: 000, 001, 002 ... 010, 011 ... 100 ... 999, maximum is 999. - length set to 0, display form: 0, 1, 2 ... 10, 11 ... 100 ... 1000 ... 10000 ... 99999999, maximum is 99999999. note: continuous incremental serial number exceeding the limit can cause scale-out failure. do not set too small incremental serial number length.</p>.
     */
    public $IndexLength;

    /**
     * @param boolean $Enabled <p>Whether to enable serial number creation for instance hostname. not enabled by default. valid values:</p><p>TRUE: enable serial number creation for instance hostname. FALSE: disable serial number creation for instance hostname.</p>.
     * @param integer $BeginIndex <p>Initial serial number. value range depends on the IndexLength parameter: - when IndexLength is 0, value range is [0, 99999999]. - when IndexLength is [1, 8], value range is [0, 10^IndexLength-1], and the maximum value is the maximum digit of the specified length. default value of initial serial number is as follows: - first-time enabling incremental serial number: default value is 0 (display digits depend on IndexLength, for example if IndexLength is 4, display value is 0000). - non-first-time enabling incremental serial number: continuation of previous incremental serial number, for example if last usage incremented to serial number 069, new default value is 070. note: modification of initial serial number may lead to duplication within the scaling group.</p>.
     * @param integer $IndexLength <P>Incremental serial number length, defaults to 0, means no specified length. value range: 0-8, maximum is integer 8. - length set to 3, display form: 000, 001, 002 ... 010, 011 ... 100 ... 999, maximum is 999. - length set to 0, display form: 0, 1, 2 ... 10, 11 ... 100 ... 1000 ... 10000 ... 99999999, maximum is 99999999. note: continuous incremental serial number exceeding the limit can cause scale-out failure. do not set too small incremental serial number length.</p>.
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("BeginIndex",$param) and $param["BeginIndex"] !== null) {
            $this->BeginIndex = $param["BeginIndex"];
        }

        if (array_key_exists("IndexLength",$param) and $param["IndexLength"] !== null) {
            $this->IndexLength = $param["IndexLength"];
        }
    }
}
