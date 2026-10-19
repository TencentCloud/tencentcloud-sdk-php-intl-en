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
 * cos asset synchronization task information
 *
 * @method integer getAppId() Obtain appid
 * @method void setAppId(integer $AppId) Set appid
 * @method string getTaskId() Obtain Synchronization task ID.
 * @method void setTaskId(string $TaskId) Set Synchronization task ID.
 * @method integer getLastScanTime() Obtain Last scanning time.
 * @method void setLastScanTime(integer $LastScanTime) Set Last scanning time.
 */
class CosAssetSyncTaskInfo extends AbstractModel
{
    /**
     * @var integer appid
     */
    public $AppId;

    /**
     * @var string Synchronization task ID.
     */
    public $TaskId;

    /**
     * @var integer Last scanning time.
     */
    public $LastScanTime;

    /**
     * @param integer $AppId appid
     * @param string $TaskId Synchronization task ID.
     * @param integer $LastScanTime Last scanning time.
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

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("LastScanTime",$param) and $param["LastScanTime"] !== null) {
            $this->LastScanTime = $param["LastScanTime"];
        }
    }
}
