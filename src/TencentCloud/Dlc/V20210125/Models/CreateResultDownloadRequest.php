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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateResultDownload request structure.
 *
 * @method string getTaskId() Obtain The result query task ID.
 * @method void setTaskId(string $TaskId) Set The result query task ID.
 * @method string getFormat() Obtain The result format.
 * @method void setFormat(string $Format) Set The result format.
 * @method boolean getForce() Obtain Whether to re-generate a file to download. This parameter applies only when the last task is `timeout` or `error`.
 * @method void setForce(boolean $Force) Set Whether to re-generate a file to download. This parameter applies only when the last task is `timeout` or `error`.
 */
class CreateResultDownloadRequest extends AbstractModel
{
    /**
     * @var string The result query task ID.
     */
    public $TaskId;

    /**
     * @var string The result format.
     */
    public $Format;

    /**
     * @var boolean Whether to re-generate a file to download. This parameter applies only when the last task is `timeout` or `error`.
     */
    public $Force;

    /**
     * @param string $TaskId The result query task ID.
     * @param string $Format The result format.
     * @param boolean $Force Whether to re-generate a file to download. This parameter applies only when the last task is `timeout` or `error`.
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("Force",$param) and $param["Force"] !== null) {
            $this->Force = $param["Force"];
        }
    }
}
