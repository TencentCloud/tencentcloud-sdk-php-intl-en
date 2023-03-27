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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The stream information of adaptive bitrate streaming.
 *
 * @method string getType() Obtain The stream type. Valid values:
<li>`audio`: Audio only</li>
<li>`video`: Video (may include audio)</li>
 * @method void setType(string $Type) Set The stream type. Valid values:
<li>`audio`: Audio only</li>
<li>`video`: Video (may include audio)</li>
 * @method integer getWidth() Obtain The video width (px) if `Type` is `video`.
 * @method void setWidth(integer $Width) Set The video width (px) if `Type` is `video`.
 * @method integer getHeight() Obtain The video height (px) if `Type` is `video`.
 * @method void setHeight(integer $Height) Set The video height (px) if `Type` is `video`.
 * @method integer getSize() Obtain The file size (bytes).
<font color=red>Note:</font>For adaptive bitrate streaming files generated before 2023-02-09T16:00:00Z, the value of this parameter is `0`.
 * @method void setSize(integer $Size) Set The file size (bytes).
<font color=red>Note:</font>For adaptive bitrate streaming files generated before 2023-02-09T16:00:00Z, the value of this parameter is `0`.
 */
class MediaSubStreamInfoItem extends AbstractModel
{
    /**
     * @var string The stream type. Valid values:
<li>`audio`: Audio only</li>
<li>`video`: Video (may include audio)</li>
     */
    public $Type;

    /**
     * @var integer The video width (px) if `Type` is `video`.
     */
    public $Width;

    /**
     * @var integer The video height (px) if `Type` is `video`.
     */
    public $Height;

    /**
     * @var integer The file size (bytes).
<font color=red>Note:</font>For adaptive bitrate streaming files generated before 2023-02-09T16:00:00Z, the value of this parameter is `0`.
     */
    public $Size;

    /**
     * @param string $Type The stream type. Valid values:
<li>`audio`: Audio only</li>
<li>`video`: Video (may include audio)</li>
     * @param integer $Width The video width (px) if `Type` is `video`.
     * @param integer $Height The video height (px) if `Type` is `video`.
     * @param integer $Size The file size (bytes).
<font color=red>Note:</font>For adaptive bitrate streaming files generated before 2023-02-09T16:00:00Z, the value of this parameter is `0`.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }
    }
}
