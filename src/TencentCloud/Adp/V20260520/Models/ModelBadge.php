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
 * <p>Model badge (external, visible on the user end): ALL copywriting has been rendered as final displayed content, without exposing template parameters</p>
 *
 * @method string getText() Obtain <p>Display copy (rendered as final copy)</p>
 * @method void setText(string $Text) Set <p>Display copy (rendered as final copy)</p>
 * @method integer getTheme() Obtain <p>Style theme</p><table><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>MODEL_BADGE_THEME_UNSPECIFIED</td><td>0</td><td>Unspecified</td></tr><tr><td>MODEL_BADGE_THEME_INFO</td><td>1</td><td>Info (blue)</td></tr><tr><td>MODEL_BADGE_THEME_SUCCESS</td><td>2</td><td>Success (green)</td></tr><tr><td>MODEL_BADGE_THEME_WARNING</td><td>3</td><td>Warning (orange)</td></tr><tr><td>MODEL_BADGE_THEME_DANGER</td><td>4</td><td>Danger (red)</td></tr></table>
 * @method void setTheme(integer $Theme) Set <p>Style theme</p><table><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>MODEL_BADGE_THEME_UNSPECIFIED</td><td>0</td><td>Unspecified</td></tr><tr><td>MODEL_BADGE_THEME_INFO</td><td>1</td><td>Info (blue)</td></tr><tr><td>MODEL_BADGE_THEME_SUCCESS</td><td>2</td><td>Success (green)</td></tr><tr><td>MODEL_BADGE_THEME_WARNING</td><td>3</td><td>Warning (orange)</td></tr><tr><td>MODEL_BADGE_THEME_DANGER</td><td>4</td><td>Danger (red)</td></tr></table>
 * @method string getTips() Obtain <p>tooltip copywriting (rendered as final copywriting). If it is empty, it is not displayed.</p>
 * @method void setTips(string $Tips) Set <p>tooltip copywriting (rendered as final copywriting). If it is empty, it is not displayed.</p>
 * @method integer getType() Obtain <p>Badge type</p><table><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>MODEL_BADGE_TYPE_UNSPECIFIED</td><td>0</td><td>Unspecified</td></tr><tr><td>MODEL_BADGE_TYPE_FREE_TRIAL</td><td>1</td><td>Limited-time free</td></tr><tr><td>MODEL_BADGE_TYPE_DEPRECATING</td><td>2</td><td>About to go offline</td></tr><tr><td>MODEL_BADGE_TYPE_NEW</td><td>3</td><td>New model</td></tr><tr><td>MODEL_BADGE_TYPE_HOT</td><td>4</td><td>Popular</td></tr></table>
 * @method void setType(integer $Type) Set <p>Badge type</p><table><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>MODEL_BADGE_TYPE_UNSPECIFIED</td><td>0</td><td>Unspecified</td></tr><tr><td>MODEL_BADGE_TYPE_FREE_TRIAL</td><td>1</td><td>Limited-time free</td></tr><tr><td>MODEL_BADGE_TYPE_DEPRECATING</td><td>2</td><td>About to go offline</td></tr><tr><td>MODEL_BADGE_TYPE_NEW</td><td>3</td><td>New model</td></tr><tr><td>MODEL_BADGE_TYPE_HOT</td><td>4</td><td>Popular</td></tr></table>
 */
class ModelBadge extends AbstractModel
{
    /**
     * @var string <p>Display copy (rendered as final copy)</p>
     */
    public $Text;

    /**
     * @var integer <p>Style theme</p><table><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>MODEL_BADGE_THEME_UNSPECIFIED</td><td>0</td><td>Unspecified</td></tr><tr><td>MODEL_BADGE_THEME_INFO</td><td>1</td><td>Info (blue)</td></tr><tr><td>MODEL_BADGE_THEME_SUCCESS</td><td>2</td><td>Success (green)</td></tr><tr><td>MODEL_BADGE_THEME_WARNING</td><td>3</td><td>Warning (orange)</td></tr><tr><td>MODEL_BADGE_THEME_DANGER</td><td>4</td><td>Danger (red)</td></tr></table>
     */
    public $Theme;

    /**
     * @var string <p>tooltip copywriting (rendered as final copywriting). If it is empty, it is not displayed.</p>
     */
    public $Tips;

    /**
     * @var integer <p>Badge type</p><table><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>MODEL_BADGE_TYPE_UNSPECIFIED</td><td>0</td><td>Unspecified</td></tr><tr><td>MODEL_BADGE_TYPE_FREE_TRIAL</td><td>1</td><td>Limited-time free</td></tr><tr><td>MODEL_BADGE_TYPE_DEPRECATING</td><td>2</td><td>About to go offline</td></tr><tr><td>MODEL_BADGE_TYPE_NEW</td><td>3</td><td>New model</td></tr><tr><td>MODEL_BADGE_TYPE_HOT</td><td>4</td><td>Popular</td></tr></table>
     */
    public $Type;

    /**
     * @param string $Text <p>Display copy (rendered as final copy)</p>
     * @param integer $Theme <p>Style theme</p><table><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>MODEL_BADGE_THEME_UNSPECIFIED</td><td>0</td><td>Unspecified</td></tr><tr><td>MODEL_BADGE_THEME_INFO</td><td>1</td><td>Info (blue)</td></tr><tr><td>MODEL_BADGE_THEME_SUCCESS</td><td>2</td><td>Success (green)</td></tr><tr><td>MODEL_BADGE_THEME_WARNING</td><td>3</td><td>Warning (orange)</td></tr><tr><td>MODEL_BADGE_THEME_DANGER</td><td>4</td><td>Danger (red)</td></tr></table>
     * @param string $Tips <p>tooltip copywriting (rendered as final copywriting). If it is empty, it is not displayed.</p>
     * @param integer $Type <p>Badge type</p><table><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>MODEL_BADGE_TYPE_UNSPECIFIED</td><td>0</td><td>Unspecified</td></tr><tr><td>MODEL_BADGE_TYPE_FREE_TRIAL</td><td>1</td><td>Limited-time free</td></tr><tr><td>MODEL_BADGE_TYPE_DEPRECATING</td><td>2</td><td>About to go offline</td></tr><tr><td>MODEL_BADGE_TYPE_NEW</td><td>3</td><td>New model</td></tr><tr><td>MODEL_BADGE_TYPE_HOT</td><td>4</td><td>Popular</td></tr></table>
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
        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Theme",$param) and $param["Theme"] !== null) {
            $this->Theme = $param["Theme"];
        }

        if (array_key_exists("Tips",$param) and $param["Tips"] !== null) {
            $this->Tips = $param["Tips"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
