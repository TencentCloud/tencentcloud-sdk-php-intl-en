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
namespace TencentCloud\Ciam\V20220331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Password salt
 *
 * @method string getSaltValue() Obtain Salt value
 * @method void setSaltValue(string $SaltValue) Set Salt value
 * @method SaltLocation getSaltLocation() Obtain Salt value location
 * @method void setSaltLocation(SaltLocation $SaltLocation) Set Salt value location
 */
class Salt extends AbstractModel
{
    /**
     * @var string Salt value
     */
    public $SaltValue;

    /**
     * @var SaltLocation Salt value location
     */
    public $SaltLocation;

    /**
     * @param string $SaltValue Salt value
     * @param SaltLocation $SaltLocation Salt value location
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
        if (array_key_exists("SaltValue",$param) and $param["SaltValue"] !== null) {
            $this->SaltValue = $param["SaltValue"];
        }

        if (array_key_exists("SaltLocation",$param) and $param["SaltLocation"] !== null) {
            $this->SaltLocation = new SaltLocation();
            $this->SaltLocation->deserialize($param["SaltLocation"]);
        }
    }
}
