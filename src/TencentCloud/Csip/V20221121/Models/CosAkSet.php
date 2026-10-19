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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * cos ak collection
 *
 * @method integer getAppId() Obtain App ID of the ak
 * @method void setAppId(integer $AppId) Set App ID of the ak
 * @method array getAkNameSet() Obtain Collection of ak names
 * @method void setAkNameSet(array $AkNameSet) Set Collection of ak names
 */
class CosAkSet extends AbstractModel
{
    /**
     * @var integer App ID of the ak
     */
    public $AppId;

    /**
     * @var array Collection of ak names
     */
    public $AkNameSet;

    /**
     * @param integer $AppId App ID of the ak
     * @param array $AkNameSet Collection of ak names
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("AkNameSet",$param) and $param["AkNameSet"] !== null) {
            $this->AkNameSet = $param["AkNameSet"];
        }
    }
}
