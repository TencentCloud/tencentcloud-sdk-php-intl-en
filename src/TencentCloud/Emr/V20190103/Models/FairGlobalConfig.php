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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Global configuration of the fair scheduler in resource scheduling.
 *
 * @method integer getUserMaxAppsDefault() Obtain <p>Program upper limit</p> on the corresponding page.
 * @method void setUserMaxAppsDefault(integer $UserMaxAppsDefault) Set <p>Program upper limit</p> on the corresponding page.
 */
class FairGlobalConfig extends AbstractModel
{
    /**
     * @var integer <p>Program upper limit</p> on the corresponding page.
     */
    public $UserMaxAppsDefault;

    /**
     * @param integer $UserMaxAppsDefault <p>Program upper limit</p> on the corresponding page.
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
        if (array_key_exists("UserMaxAppsDefault",$param) and $param["UserMaxAppsDefault"] !== null) {
            $this->UserMaxAppsDefault = $param["UserMaxAppsDefault"];
        }
    }
}
