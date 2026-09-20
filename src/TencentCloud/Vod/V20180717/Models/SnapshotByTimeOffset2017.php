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
 * Screenshot output information (2017 version)
 *
 * @method integer getErrCode() Obtain Error code.
<li>0: success;</li>
<li>Other value: failure.</li>
 * @method void setErrCode(integer $ErrCode) Set Error code.
<li>0: success;</li>
<li>Other value: failure.</li>
 * @method integer getTimeOffset() Obtain Screenshot time, in milliseconds.
 * @method void setTimeOffset(integer $TimeOffset) Set Screenshot time, in milliseconds.
 * @method string getUrl() Obtain Screenshot output file address.
 * @method void setUrl(string $Url) Set Screenshot output file address.
 */
class SnapshotByTimeOffset2017 extends AbstractModel
{
    /**
     * @var integer Error code.
<li>0: success;</li>
<li>Other value: failure.</li>
     */
    public $ErrCode;

    /**
     * @var integer Screenshot time, in milliseconds.
     */
    public $TimeOffset;

    /**
     * @var string Screenshot output file address.
     */
    public $Url;

    /**
     * @param integer $ErrCode Error code.
<li>0: success;</li>
<li>Other value: failure.</li>
     * @param integer $TimeOffset Screenshot time, in milliseconds.
     * @param string $Url Screenshot output file address.
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
