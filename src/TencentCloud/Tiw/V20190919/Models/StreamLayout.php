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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Stream layout parameter
 *
 * @method LayoutParams getLayoutParams() Obtain Stream layout configuration
 * @method void setLayoutParams(LayoutParams $LayoutParams) Set Stream layout configuration
 * @method string getInputStreamId() Obtain Video stream ID
Description of possible stream ID values:
1. tic_record_user: the current picture is used to display the whiteboard video stream.
2. tic_substream: the current picture is used to display the auxiliary video stream.
3. Specific user ID: the current picture is used to display the video stream of a specific user.
4. Left empty: the current picture is vacant for new video stream.
 * @method void setInputStreamId(string $InputStreamId) Set Video stream ID
Description of possible stream ID values:
1. tic_record_user: the current picture is used to display the whiteboard video stream.
2. tic_substream: the current picture is used to display the auxiliary video stream.
3. Specific user ID: the current picture is used to display the video stream of a specific user.
4. Left empty: the current picture is vacant for new video stream.
 * @method string getBackgroundColor() Obtain Background color, which is black by default. Its format is RGB, for example, "#FF0000" for the red color.
 * @method void setBackgroundColor(string $BackgroundColor) Set Background color, which is black by default. Its format is RGB, for example, "#FF0000" for the red color.
 */
class StreamLayout extends AbstractModel
{
    /**
     * @var LayoutParams Stream layout configuration
     */
    public $LayoutParams;

    /**
     * @var string Video stream ID
Description of possible stream ID values:
1. tic_record_user: the current picture is used to display the whiteboard video stream.
2. tic_substream: the current picture is used to display the auxiliary video stream.
3. Specific user ID: the current picture is used to display the video stream of a specific user.
4. Left empty: the current picture is vacant for new video stream.
     */
    public $InputStreamId;

    /**
     * @var string Background color, which is black by default. Its format is RGB, for example, "#FF0000" for the red color.
     */
    public $BackgroundColor;

    /**
     * @param LayoutParams $LayoutParams Stream layout configuration
     * @param string $InputStreamId Video stream ID
Description of possible stream ID values:
1. tic_record_user: the current picture is used to display the whiteboard video stream.
2. tic_substream: the current picture is used to display the auxiliary video stream.
3. Specific user ID: the current picture is used to display the video stream of a specific user.
4. Left empty: the current picture is vacant for new video stream.
     * @param string $BackgroundColor Background color, which is black by default. Its format is RGB, for example, "#FF0000" for the red color.
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
        if (array_key_exists("LayoutParams",$param) and $param["LayoutParams"] !== null) {
            $this->LayoutParams = new LayoutParams();
            $this->LayoutParams->deserialize($param["LayoutParams"]);
        }

        if (array_key_exists("InputStreamId",$param) and $param["InputStreamId"] !== null) {
            $this->InputStreamId = $param["InputStreamId"];
        }

        if (array_key_exists("BackgroundColor",$param) and $param["BackgroundColor"] !== null) {
            $this->BackgroundColor = $param["BackgroundColor"];
        }
    }
}
