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
 * 
 *
 * @method integer getErrCode() Obtain 
 * @method void setErrCode(integer $ErrCode) Set 
 * @method integer getTimeOffset() Obtain 
 * @method void setTimeOffset(integer $TimeOffset) Set 
 * @method string getUrl() Obtain 
 * @method void setUrl(string $Url) Set 
 */
class SnapshotByTimeOffset2017 extends AbstractModel
{
    /**
     * @var integer 
     */
    public $ErrCode;

    /**
     * @var integer 
     */
    public $TimeOffset;

    /**
     * @var string 
     */
    public $Url;

    /**
     * @param integer $ErrCode 
     * @param integer $TimeOffset 
     * @param string $Url 
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
