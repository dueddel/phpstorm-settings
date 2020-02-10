/**
 * Sets the ${FIELD_NAME}#if (${TYPE_HINT} == "bool") flag#end.
 *
 * @param ${TYPE_HINT} $${PARAM_NAME}
 */
public ${STATIC} function set${NAME}(#if (${SCALAR_TYPE_HINT})${SCALAR_TYPE_HINT} #else#end$${PARAM_NAME}#if (${TYPE_HINT} == "bool") = true#end)
{
#if (${STATIC} == "static")
    self::$${FIELD_NAME} = $${PARAM_NAME};
#else
    $this->${FIELD_NAME} = $${PARAM_NAME};
#end
}