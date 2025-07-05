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
 * Screencapturing output information (v2017)
 *
 * @method integer getErrCode() Obtain Error code
<li>0: success;</li>
<li>Other values: failure.</li>
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setErrCode(integer $ErrCode) Set Error code
<li>0: success;</li>
<li>Other values: failure.</li>
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getTimeOffset() Obtain Specific time point of screenshot in milliseconds.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTimeOffset(integer $TimeOffset) Set Specific time point of screenshot in milliseconds.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getUrl() Obtain Address of output screenshot file.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUrl(string $Url) Set Address of output screenshot file.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class SnapshotByTimeOffset2017 extends AbstractModel
{
    /**
     * @var integer Error code
<li>0: success;</li>
<li>Other values: failure.</li>
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ErrCode;

    /**
     * @var integer Specific time point of screenshot in milliseconds.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TimeOffset;

    /**
     * @var string Address of output screenshot file.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Url;

    /**
     * @param integer $ErrCode Error code
<li>0: success;</li>
<li>Other values: failure.</li>
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $TimeOffset Specific time point of screenshot in milliseconds.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Url Address of output screenshot file.
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("TimeOffset",$param) and $param["TimeOffset"] !== null) {
            $this->TimeOffset = $param["TimeOffset"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}
