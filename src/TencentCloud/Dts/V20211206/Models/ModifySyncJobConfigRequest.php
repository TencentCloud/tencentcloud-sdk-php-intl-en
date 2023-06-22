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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifySyncJobConfig request structure.
 *
 * @method string getJobId() Obtain Sync task ID
 * @method void setJobId(string $JobId) Set Sync task ID
 * @method Objects getDynamicObjects() Obtain The modified sync objects
 * @method void setDynamicObjects(Objects $DynamicObjects) Set The modified sync objects
 * @method DynamicOptions getDynamicOptions() Obtain The modified sync task options
 * @method void setDynamicOptions(DynamicOptions $DynamicOptions) Set The modified sync task options
 */
class ModifySyncJobConfigRequest extends AbstractModel
{
    /**
     * @var string Sync task ID
     */
    public $JobId;

    /**
     * @var Objects The modified sync objects
     */
    public $DynamicObjects;

    /**
     * @var DynamicOptions The modified sync task options
     */
    public $DynamicOptions;

    /**
     * @param string $JobId Sync task ID
     * @param Objects $DynamicObjects The modified sync objects
     * @param DynamicOptions $DynamicOptions The modified sync task options
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("DynamicObjects",$param) and $param["DynamicObjects"] !== null) {
            $this->DynamicObjects = new Objects();
            $this->DynamicObjects->deserialize($param["DynamicObjects"]);
        }

        if (array_key_exists("DynamicOptions",$param) and $param["DynamicOptions"] !== null) {
            $this->DynamicOptions = new DynamicOptions();
            $this->DynamicOptions->deserialize($param["DynamicOptions"]);
        }
    }
}
