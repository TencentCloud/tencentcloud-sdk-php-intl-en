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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ISP information
 *
 * @method string getISPId() Obtain ISP ID
 * @method void setISPId(string $ISPId) Set ISP ID
 * @method string getISPName() Obtain ISP name
 * @method void setISPName(string $ISPName) Set ISP name
 */
class ISP extends AbstractModel
{
    /**
     * @var string ISP ID
     */
    public $ISPId;

    /**
     * @var string ISP name
     */
    public $ISPName;

    /**
     * @param string $ISPId ISP ID
     * @param string $ISPName ISP name
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
        if (array_key_exists("ISPId",$param) and $param["ISPId"] !== null) {
            $this->ISPId = $param["ISPId"];
        }

        if (array_key_exists("ISPName",$param) and $param["ISPName"] !== null) {
            $this->ISPName = $param["ISPName"];
        }
    }
}
