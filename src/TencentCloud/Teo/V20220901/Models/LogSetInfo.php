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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Logset information
 *
 * @method string getLogSetRegion() Obtain Region of the logset.
 * @method void setLogSetRegion(string $LogSetRegion) Set Region of the logset.
 * @method string getLogSetName() Obtain Name of the logset.
 * @method void setLogSetName(string $LogSetName) Set Name of the logset.
 * @method string getLogSetId() Obtain ID of the logset.
 * @method void setLogSetId(string $LogSetId) Set ID of the logset.
 * @method string getDeleted() Obtain Whether the logset is deleted. Values:
<li>`no`: The logset is not deleted;</li>
<li>`yes`: The logset is deleted.</li>
 * @method void setDeleted(string $Deleted) Set Whether the logset is deleted. Values:
<li>`no`: The logset is not deleted;</li>
<li>`yes`: The logset is deleted.</li>
 */
class LogSetInfo extends AbstractModel
{
    /**
     * @var string Region of the logset.
     */
    public $LogSetRegion;

    /**
     * @var string Name of the logset.
     */
    public $LogSetName;

    /**
     * @var string ID of the logset.
     */
    public $LogSetId;

    /**
     * @var string Whether the logset is deleted. Values:
<li>`no`: The logset is not deleted;</li>
<li>`yes`: The logset is deleted.</li>
     */
    public $Deleted;

    /**
     * @param string $LogSetRegion Region of the logset.
     * @param string $LogSetName Name of the logset.
     * @param string $LogSetId ID of the logset.
     * @param string $Deleted Whether the logset is deleted. Values:
<li>`no`: The logset is not deleted;</li>
<li>`yes`: The logset is deleted.</li>
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
        if (array_key_exists("LogSetRegion",$param) and $param["LogSetRegion"] !== null) {
            $this->LogSetRegion = $param["LogSetRegion"];
        }

        if (array_key_exists("LogSetName",$param) and $param["LogSetName"] !== null) {
            $this->LogSetName = $param["LogSetName"];
        }

        if (array_key_exists("LogSetId",$param) and $param["LogSetId"] !== null) {
            $this->LogSetId = $param["LogSetId"];
        }

        if (array_key_exists("Deleted",$param) and $param["Deleted"] !== null) {
            $this->Deleted = $param["Deleted"];
        }
    }
}
