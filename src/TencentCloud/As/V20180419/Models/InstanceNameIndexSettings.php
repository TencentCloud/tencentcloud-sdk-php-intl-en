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
 * Instance name index settings.
 *
 * @method boolean getEnabled() Obtain <p>Whether to enable instance creation sequencing, disabled by default. valid values:</p><p><strong>TRUE</strong>: indicates that instance creation sequencing is enabled; <strong>FALSE</strong>: indicates that instance creation sequencing is disabled</p>.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEnabled(boolean $Enabled) Set <p>Whether to enable instance creation sequencing, disabled by default. valid values:</p><p><strong>TRUE</strong>: indicates that instance creation sequencing is enabled; <strong>FALSE</strong>: indicates that instance creation sequencing is disabled</p>.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getBeginIndex() Obtain <p>Initial serial number. the value range is related to the IndexLength parameter: - when IndexLength is 0, the value range is [0, 99999999]. - when IndexLength is [1, 8], the value range is [0, 10^IndexLength-1], and the maximum value is the maximum number with the specified digits. the default value of the initial serial number is as follows: - first-time enabling of incremental serial number: the default value is 0 (the display length is related to IndexLength, for example, if IndexLength is 4, the display value is 0000). - non-first-time enabling of incremental serial number: the previous incremental serial number is postponed, for example, if the last usage incremented to serial number 069, the new default initial serial number is 070. note: modifying the initial serial number may lead to duplication within the scaling group.</p>.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBeginIndex(integer $BeginIndex) Set <p>Initial serial number. the value range is related to the IndexLength parameter: - when IndexLength is 0, the value range is [0, 99999999]. - when IndexLength is [1, 8], the value range is [0, 10^IndexLength-1], and the maximum value is the maximum number with the specified digits. the default value of the initial serial number is as follows: - first-time enabling of incremental serial number: the default value is 0 (the display length is related to IndexLength, for example, if IndexLength is 4, the display value is 0000). - non-first-time enabling of incremental serial number: the previous incremental serial number is postponed, for example, if the last usage incremented to serial number 069, the new default initial serial number is 070. note: modifying the initial serial number may lead to duplication within the scaling group.</p>.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIndexLength() Obtain <P>Incremental serial number length, defaults to 0, means no specified length. value range: 0-8, maximum is integer 8. - length set to 3, display form: 000, 001, 002 ... 010, 011 ... 100 ... 999, maximum is 999. - length set to 0, display form: 0, 1, 2 ... 10, 11 ... 100 ... 1000 ... 10000 ... 99999999, maximum is 99999999. note: continuous incremental serial number exceeding the limit can cause scale-out failure. do not set too small incremental serial number length.</p>.
 * @method void setIndexLength(integer $IndexLength) Set <P>Incremental serial number length, defaults to 0, means no specified length. value range: 0-8, maximum is integer 8. - length set to 3, display form: 000, 001, 002 ... 010, 011 ... 100 ... 999, maximum is 999. - length set to 0, display form: 0, 1, 2 ... 10, 11 ... 100 ... 1000 ... 10000 ... 99999999, maximum is 99999999. note: continuous incremental serial number exceeding the limit can cause scale-out failure. do not set too small incremental serial number length.</p>.
 */
class InstanceNameIndexSettings extends AbstractModel
{
    /**
     * @var boolean <p>Whether to enable instance creation sequencing, disabled by default. valid values:</p><p><strong>TRUE</strong>: indicates that instance creation sequencing is enabled; <strong>FALSE</strong>: indicates that instance creation sequencing is disabled</p>.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Enabled;

    /**
     * @var integer <p>Initial serial number. the value range is related to the IndexLength parameter: - when IndexLength is 0, the value range is [0, 99999999]. - when IndexLength is [1, 8], the value range is [0, 10^IndexLength-1], and the maximum value is the maximum number with the specified digits. the default value of the initial serial number is as follows: - first-time enabling of incremental serial number: the default value is 0 (the display length is related to IndexLength, for example, if IndexLength is 4, the display value is 0000). - non-first-time enabling of incremental serial number: the previous incremental serial number is postponed, for example, if the last usage incremented to serial number 069, the new default initial serial number is 070. note: modifying the initial serial number may lead to duplication within the scaling group.</p>.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BeginIndex;

    /**
     * @var integer <P>Incremental serial number length, defaults to 0, means no specified length. value range: 0-8, maximum is integer 8. - length set to 3, display form: 000, 001, 002 ... 010, 011 ... 100 ... 999, maximum is 999. - length set to 0, display form: 0, 1, 2 ... 10, 11 ... 100 ... 1000 ... 10000 ... 99999999, maximum is 99999999. note: continuous incremental serial number exceeding the limit can cause scale-out failure. do not set too small incremental serial number length.</p>.
     */
    public $IndexLength;

    /**
     * @param boolean $Enabled <p>Whether to enable instance creation sequencing, disabled by default. valid values:</p><p><strong>TRUE</strong>: indicates that instance creation sequencing is enabled; <strong>FALSE</strong>: indicates that instance creation sequencing is disabled</p>.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $BeginIndex <p>Initial serial number. the value range is related to the IndexLength parameter: - when IndexLength is 0, the value range is [0, 99999999]. - when IndexLength is [1, 8], the value range is [0, 10^IndexLength-1], and the maximum value is the maximum number with the specified digits. the default value of the initial serial number is as follows: - first-time enabling of incremental serial number: the default value is 0 (the display length is related to IndexLength, for example, if IndexLength is 4, the display value is 0000). - non-first-time enabling of incremental serial number: the previous incremental serial number is postponed, for example, if the last usage incremented to serial number 069, the new default initial serial number is 070. note: modifying the initial serial number may lead to duplication within the scaling group.</p>.
Note: This field may return null, indicating that no valid values can be obtained.
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
