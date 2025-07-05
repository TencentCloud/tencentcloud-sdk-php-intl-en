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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Grayscale project configuration
 *
 * @method string getProjectName() Obtain Greyscale project name
 * @method void setProjectName(string $ProjectName) Set Greyscale project name
 * @method boolean getStatus() Obtain true: grayscale release in progress; false: grayscale release not in progress.
 * @method void setStatus(boolean $Status) Set true: grayscale release in progress; false: grayscale release not in progress.
 */
class ABTestConfig extends AbstractModel
{
    /**
     * @var string Greyscale project name
     */
    public $ProjectName;

    /**
     * @var boolean true: grayscale release in progress; false: grayscale release not in progress.
     */
    public $Status;

    /**
     * @param string $ProjectName Greyscale project name
     * @param boolean $Status true: grayscale release in progress; false: grayscale release not in progress.
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
        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
