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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Image task
 *
 * @method string getState() Obtain Image import status. Valid values: PENDING, PROCESSING, SUCCESS, FAILED
 * @method void setState(string $State) Set Image import status. Valid values: PENDING, PROCESSING, SUCCESS, FAILED
 * @method string getMessage() Obtain Cause of import failure (FAILED)
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMessage(string $Message) Set Cause of import failure (FAILED)
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getImageName() Obtain Image name
 * @method void setImageName(string $ImageName) Set Image name
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 */
class ImageTask extends AbstractModel
{
    /**
     * @var string Image import status. Valid values: PENDING, PROCESSING, SUCCESS, FAILED
     */
    public $State;

    /**
     * @var string Cause of import failure (FAILED)
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Message;

    /**
     * @var string Image name
     */
    public $ImageName;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @param string $State Image import status. Valid values: PENDING, PROCESSING, SUCCESS, FAILED
     * @param string $Message Cause of import failure (FAILED)
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ImageName Image name
     * @param string $CreateTime Creation time
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
        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
