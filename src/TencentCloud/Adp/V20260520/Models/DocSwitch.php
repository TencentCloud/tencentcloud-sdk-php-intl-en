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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Document switch configuration
 *
 * @method boolean getDownloadEnabled() Obtain <p>Whether it is downloadable</p>
 * @method void setDownloadEnabled(boolean $DownloadEnabled) Set <p>Whether it is downloadable</p>
 * @method boolean getReferEnabled() Obtain <p>Whether to show in the reference</p>
 * @method void setReferEnabled(boolean $ReferEnabled) Set <p>Whether to show in the reference</p>
 */
class DocSwitch extends AbstractModel
{
    /**
     * @var boolean <p>Whether it is downloadable</p>
     */
    public $DownloadEnabled;

    /**
     * @var boolean <p>Whether to show in the reference</p>
     */
    public $ReferEnabled;

    /**
     * @param boolean $DownloadEnabled <p>Whether it is downloadable</p>
     * @param boolean $ReferEnabled <p>Whether to show in the reference</p>
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
        if (array_key_exists("DownloadEnabled",$param) and $param["DownloadEnabled"] !== null) {
            $this->DownloadEnabled = $param["DownloadEnabled"];
        }

        if (array_key_exists("ReferEnabled",$param) and $param["ReferEnabled"] !== null) {
            $this->ReferEnabled = $param["ReferEnabled"];
        }
    }
}
