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
namespace TencentCloud\Tmt\V20180321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Large model image translation detailed information
 *
 * @method string getSourceLineText() Obtain <p>Original text of the current row</p>
 * @method void setSourceLineText(string $SourceLineText) Set <p>Original text of the current row</p>
 * @method string getTargetLineText() Obtain <p>Translation of the current row</p>
 * @method void setTargetLineText(string $TargetLineText) Set <p>Translation of the current row</p>
 * @method BoundingBox getBoundingBox() Obtain <p>Paragraph text box location</p>
 * @method void setBoundingBox(BoundingBox $BoundingBox) Set <p>Paragraph text box location</p>
 * @method integer getLinesCount() Obtain <p>Row count</p>
 * @method void setLinesCount(integer $LinesCount) Set <p>Row count</p>
 * @method integer getLineHeight() Obtain <p>Line height.</p><p>Unit: px.</p>
 * @method void setLineHeight(integer $LineHeight) Set <p>Line height.</p><p>Unit: px.</p>
 * @method integer getSpamCode() Obtain <p>The spam_code field is 0 in a normal paragraph; if the spam_code field exists and its value is above 0 (1: hit garbage check; 2: hit security policy; 3: another.), then the security check hit is filtered.</p>
 * @method void setSpamCode(integer $SpamCode) Set <p>The spam_code field is 0 in a normal paragraph; if the spam_code field exists and its value is above 0 (1: hit garbage check; 2: hit security policy; 3: another.), then the security check hit is filtered.</p>
 * @method RotateParagraphRect getRotateParagraphRect() Obtain <p>Rotation information of paragraph text. Coordinates are valid only when valid is true.</p>
 * @method void setRotateParagraphRect(RotateParagraphRect $RotateParagraphRect) Set <p>Rotation information of paragraph text. Coordinates are valid only when valid is true.</p>
 */
class TransDetail extends AbstractModel
{
    /**
     * @var string <p>Original text of the current row</p>
     */
    public $SourceLineText;

    /**
     * @var string <p>Translation of the current row</p>
     */
    public $TargetLineText;

    /**
     * @var BoundingBox <p>Paragraph text box location</p>
     */
    public $BoundingBox;

    /**
     * @var integer <p>Row count</p>
     */
    public $LinesCount;

    /**
     * @var integer <p>Line height.</p><p>Unit: px.</p>
     */
    public $LineHeight;

    /**
     * @var integer <p>The spam_code field is 0 in a normal paragraph; if the spam_code field exists and its value is above 0 (1: hit garbage check; 2: hit security policy; 3: another.), then the security check hit is filtered.</p>
     */
    public $SpamCode;

    /**
     * @var RotateParagraphRect <p>Rotation information of paragraph text. Coordinates are valid only when valid is true.</p>
     */
    public $RotateParagraphRect;

    /**
     * @param string $SourceLineText <p>Original text of the current row</p>
     * @param string $TargetLineText <p>Translation of the current row</p>
     * @param BoundingBox $BoundingBox <p>Paragraph text box location</p>
     * @param integer $LinesCount <p>Row count</p>
     * @param integer $LineHeight <p>Line height.</p><p>Unit: px.</p>
     * @param integer $SpamCode <p>The spam_code field is 0 in a normal paragraph; if the spam_code field exists and its value is above 0 (1: hit garbage check; 2: hit security policy; 3: another.), then the security check hit is filtered.</p>
     * @param RotateParagraphRect $RotateParagraphRect <p>Rotation information of paragraph text. Coordinates are valid only when valid is true.</p>
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
        if (array_key_exists("SourceLineText",$param) and $param["SourceLineText"] !== null) {
            $this->SourceLineText = $param["SourceLineText"];
        }

        if (array_key_exists("TargetLineText",$param) and $param["TargetLineText"] !== null) {
            $this->TargetLineText = $param["TargetLineText"];
        }

        if (array_key_exists("BoundingBox",$param) and $param["BoundingBox"] !== null) {
            $this->BoundingBox = new BoundingBox();
            $this->BoundingBox->deserialize($param["BoundingBox"]);
        }

        if (array_key_exists("LinesCount",$param) and $param["LinesCount"] !== null) {
            $this->LinesCount = $param["LinesCount"];
        }

        if (array_key_exists("LineHeight",$param) and $param["LineHeight"] !== null) {
            $this->LineHeight = $param["LineHeight"];
        }

        if (array_key_exists("SpamCode",$param) and $param["SpamCode"] !== null) {
            $this->SpamCode = $param["SpamCode"];
        }

        if (array_key_exists("RotateParagraphRect",$param) and $param["RotateParagraphRect"] !== null) {
            $this->RotateParagraphRect = new RotateParagraphRect();
            $this->RotateParagraphRect->deserialize($param["RotateParagraphRect"]);
        }
    }
}
