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
 * Application appeal information (non-modifiable by users)
 *
 * @method AppealingStatus getAppealingStatus() Obtain Configuration items in an appeal
 * @method void setAppealingStatus(AppealingStatus $AppealingStatus) Set Configuration items in an appeal
 */
class AppAppeal extends AbstractModel
{
    /**
     * @var AppealingStatus Configuration items in an appeal
     */
    public $AppealingStatus;

    /**
     * @param AppealingStatus $AppealingStatus Configuration items in an appeal
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
        if (array_key_exists("AppealingStatus",$param) and $param["AppealingStatus"] !== null) {
            $this->AppealingStatus = new AppealingStatus();
            $this->AppealingStatus->deserialize($param["AppealingStatus"]);
        }
    }
}
