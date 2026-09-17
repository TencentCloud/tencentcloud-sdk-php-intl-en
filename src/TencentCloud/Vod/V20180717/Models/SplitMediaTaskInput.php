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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getFileId() Obtain 
 * @method void setFileId(string $FileId) Set 
 * @method float getStartTimeOffset() Obtain 
 * @method void setStartTimeOffset(float $StartTimeOffset) Set 
 * @method float getEndTimeOffset() Obtain 
 * @method void setEndTimeOffset(float $EndTimeOffset) Set 
 * @method string getProcedureName() Obtain 
 * @method void setProcedureName(string $ProcedureName) Set 
 * @method SplitMediaOutputConfig getOutputConfig() Obtain 
 * @method void setOutputConfig(SplitMediaOutputConfig $OutputConfig) Set 
 */
class SplitMediaTaskInput extends AbstractModel
{
    /**
     * @var string 
     */
    public $FileId;

    /**
     * @var float 
     */
    public $StartTimeOffset;

    /**
     * @var float 
     */
    public $EndTimeOffset;

    /**
     * @var string 
     */
    public $ProcedureName;

    /**
     * @var SplitMediaOutputConfig 
     */
    public $OutputConfig;

    /**
     * @param string $FileId 
     * @param float $StartTimeOffset 
     * @param float $EndTimeOffset 
     * @param string $ProcedureName 
     * @param SplitMediaOutputConfig $OutputConfig 
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
        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("StartTimeOffset",$param) and $param["StartTimeOffset"] !== null) {
            $this->StartTimeOffset = $param["StartTimeOffset"];
        }

        if (array_key_exists("EndTimeOffset",$param) and $param["EndTimeOffset"] !== null) {
            $this->EndTimeOffset = $param["EndTimeOffset"];
        }

        if (array_key_exists("ProcedureName",$param) and $param["ProcedureName"] !== null) {
            $this->ProcedureName = $param["ProcedureName"];
        }

        if (array_key_exists("OutputConfig",$param) and $param["OutputConfig"] !== null) {
            $this->OutputConfig = new SplitMediaOutputConfig();
            $this->OutputConfig->deserialize($param["OutputConfig"]);
        }
    }
}
